<?php

namespace App\Controller;

use App\Entity\Notification;
use App\Entity\Plan;
use App\Entity\Transaction;
use App\Entity\User;
use App\Service\EmailSender;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/dashboard')]
class DashboardController extends AbstractController
{
    #[Route('/', name: 'dashboard')]
    public function index(ManagerRegistry $doctrine): Response
    {
        // $em = $doctrine->getManager();
        // $user = $doctrine->getRepository(User::class)->find( $this->getUser());
        
        // $user->setBalance(10000);
        // $em->persist($user);
        // $em->flush();
        $activePlans = $doctrine->getRepository(Plan::class)->findBy(["complete" => false, 'user'=> $this->getUser()], ['startdate'=> 'DESC'], 2);
        $recentTransaction = $doctrine->getRepository(Transaction::class)->findBy(['user'=> $this->getUser()], ['date' => 'DESC'], 5);
        return $this->render('dashboard/index.html.twig', [
            'path' => 'dashboard',
            'txs'=> $recentTransaction,
            'activeplans' => $activePlans
        ]);
    }

    public function nav(string $path)
    {
        return $this->render('nav.html.twig',['path'=>$path]);
    }

    #[Route('/deposit', name: 'deposit')]
    public function deposit(): Response
    {
        return $this->render('dashboard/deposit.html.twig', [
            'path' => 'deposit',
        ]);
    }

    #[Route('/payment', name: 'payment')]
    public function payment(Request $request, ManagerRegistry $doctrine, EmailSender $emailSender): Response
    { 
        if($request->get('_tokenp')){
           try {
            $em = $doctrine->getManager();
            $user = $this->getUser();
            if (!$user instanceof User) {
                throw new \RuntimeException('Unable to load user account.');
            }
            $amount = $this->parsePositiveAmount($request->get('amount'));
            if ($amount === null) {
                noty()->addError('Please enter a valid deposit amount.');
                return $this->redirectToRoute('deposit');
            }
            $method = strtolower((string) $request->get('method'));
            if (!in_array($method, ['btc', 'eth', 'usdt'], true)) {
                noty()->addError('Please select a valid payment method.');
                return $this->redirectToRoute('deposit');
            }
            $image = $request->files->get('proof');
            if ($image === null) {
                noty()->addError('Please upload payment proof.');
                return $this->redirectToRoute('deposit');
            }
            $uploadsDirectory = $this->getParameter('upload_directory');
            $originalName = preg_replace('/[^A-Za-z0-9._-]/', '_', $image->getClientOriginalName());
            $filename = bin2hex(random_bytes(8)) . '_' . ($originalName ?: 'proof');
           if($image->move($uploadsDirectory, $filename)){
                $transaction = new Transaction();
                $transaction->setDate(new DateTime())
                            ->setUser( $user )
                            ->setAmount( $amount )
                            ->setType("deposit")
                            ->setDescription("Deposit via $method")
                            ->setImage($filename)
                            ->setStatus('pending');
                $em->persist( $transaction );

                $noti = new Notification();
                $noti->setDate(new DateTime())
                     ->setTitle( "New Deposit" )
                     ->setMessage("Deposit has been received and it's being processed")
                     ->setUser( $user );
                $em->persist( $noti );

                $em->flush();
                $text = "new deposit request of $$amount from ". $user->getName();
                try {
                    $emailSender->sendTransactionMail($text, 'New Deposit Request');
                    $emailSender->sendDepEmail(
                        $user->getEmail(),
                        'Deposit Request Received',
                        'Your deposit request was received',
                        ['name' => $user->getName(), 'message' => "your deposit request of $$amount has been received and is awaiting confirmation"]
                    );
                } catch (\Throwable $mailError) {
                    error_log($mailError->getMessage());
                }
                noty()->addSuccess( "Payment Successful Please Wait For Comfirmation!" );
                return $this->redirectToRoute('dashboard');
           }
           } catch (\Throwable $th) {
            //throw $th;
            $error = $th->getMessage();
            noty()->addError( "An error occurred while processing your request. $error" );
           }
        }
        if ($request->get('method')) {
            $amount = $this->parsePositiveAmount($request->get('amount'));
            if ($amount === null) {
                noty()->addError('Please enter a valid deposit amount.');
                return $this->redirectToRoute('deposit');
            }
            $method = strtolower((string) $request->get('method'));
            switch($method) {
                case "btc":
                    $address = "bc1qty3eu4zgzslms0xgm36lj55t807j4w7fkpemne";
                    break;
                case "eth":
                    $address = "0xd679663043E463DD25A0022d84816FC587DCe1c5";
                    break;
                case "usdt":
                    $address = "TSsYRDob8EpyoGe4CVrxch3mMBddfjNJ9A";
                    break;  
                default:
                    noty()->addError('Please select a valid payment method.');
                    return $this->redirectToRoute('deposit');
                }
            return $this->render('dashboard/payment.html.twig', [
                'path' => 'deposit',
                'amount' => $amount,
                'method' => $method,
                'address' => $address
            ]);
        }

        return $this->redirectToRoute('deposit');
    }

    #[Route('/transaction', name: 'transaction')]
    public function transaction(ManagerRegistry $doctrine, PaginatorInterface $paginator, Request $request): Response
    {

        $userId = $this->getUser();

        $transactions = $doctrine->getRepository(Transaction::class)->findBy(['user'=> $this->getUser()], ['date' => 'DESC']);
        $em = $doctrine->getManager();
        $query = $em->createQueryBuilder()
        ->select('t')
        ->from(Transaction::class, 't')
        ->where('t.user = :userId')
        ->setParameter('userId', $userId)
        ->getQuery();
        $pagination = $paginator->paginate($query, $request->query->getInt('page', 1), 10 );
        return $this->render('dashboard/transaction.html.twig', [
            'path' => 'transaction',
            'paginations'=> $pagination
        ]);
    }

    #[Route('/withdrawal', name: 'withdrawal')]
    public function withdrawal(ManagerRegistry $doctrine): Response
    {

        $transactions = $doctrine->getRepository(Transaction::class)->findBy(['user'=> $this->getUser()], ['date' => 'DESC']);
        return $this->render('dashboard/withdrawal.html.twig', [
            'path' => 'withdrawal',
            'txs'=> $transactions
        ]);
    }

    #[Route('/transfer/{mode}', name: 'transfer')]
    public function transfer($mode, Request $request, ManagerRegistry $doctrine, EmailSender $emailSender): Response
    {
        $em = $doctrine->getManager();
        if(null != $request->get('amount')){
            try {
                $amount = $this->parsePositiveAmount($request->get('amount'));
                if ($amount === null) {
                    noty()->addError('Please enter a valid withdrawal amount.');
                    return $this->redirectToRoute('transfer', ['mode' => $mode]);
                }
                $user = $this->getUser();
                if (!$user instanceof User) {
                    throw new \RuntimeException('Unable to load user account.');
                }
                if ($user->getBalance() >= $amount) {
                    $user->setBalance( $user->getBalance() - $amount);
                    $em->persist($user);
                    $details = $request->get('details');
                    $transaction = new Transaction();
                    $transaction->setAmount($amount)
                                ->setType("withdrawal")
                                ->setDate(new DateTime())
                                ->setDescription("Withdraw via $mode to wallet: $details")
                                ->setStatus('pending')
                                ->setUser($user);
                    $em->persist($transaction);
                    $noti = new Notification();
                    $noti->setTitle('New Withdrawal')
                        ->setMessage("New withdrawal of $$amount has been requested by you to wallet: $details")
                        ->setDate(new DateTime())
                        ->setUser($user);
                    $em->persist($noti);
                    $em->flush();
                    $text = "new withdrawal request of $$amount from ". $user->getName();
                    
                    try {
                        $emailSender->sendTransactionMail($text, 'New Withdrawal Request');
                        $emailSender->sendDepEmail(
                            $user->getEmail(),
                            'Withdrawal Request Received',
                            'Your withdrawal request was received',
                            ['name' => $user->getName(), 'message' => "your withdrawal request of $$amount has been received and is awaiting confirmation"]
                        );
                    } catch (\Throwable $mailError) {
                        error_log($mailError->getMessage());
                    }
                    
                    noty()->addSuccess( "Withdrawal request submitted and awaiting confirmation");
                    return $this->redirectToRoute('dashboard');
                }else{
                    noty()->addError("Insufficient Balance");

                }
                
            } catch (\Throwable $th) {
              $error = $th->getMessage();
              noty()->addError($error);
            }
        }

        return $this->render('dashboard/transfer.html.twig', [
            'path' => 'withdraw',
            'mode'=> $mode
        ]);
    }

    private function parsePositiveAmount(mixed $amount): ?float
    {
        if (!is_numeric($amount)) {
            return null;
        }

        $amount = (float) $amount;

        return $amount > 0 ? $amount : null;
    }
    
    #[Route('/invest', name: 'invest')]
    public function invest(ManagerRegistry $doctrine, Request $request, EmailSender $emailSender): Response
    {
        $em = $doctrine->getManager();
        if(null !=$request->get('planname')){
            try {
                $amount  = $request->get('amount');
                $user = $doctrine->getRepository(User::class)->find($this->getUser());
                if ($user->getBalance() >= $amount) {
                    $user->setBalance( $user->getBalance() - $amount);
                    $em->persist($user);

                    $plan = new Plan();
                    $dateTime = new DateTime();
                   
                    $plan->setName($request->get('planname'))
                         ->setStartdate(new DateTime())
                         ->setUser($user)
                         ->setInterest($request->get('return'))
                         ->setAmount($amount)
                         ->setComplete(false)
                         ->setEnddate($dateTime->modify( "+".$request->get('duration')." days"));
                    $em->persist($plan);

                    $noti = new Notification();
                    $noti->setTitle('New Investment Placed')
                         ->setMessage("You have placed an investment of $".number_format((float)$amount,2)." in the plan ".strtoupper($request->get('planname')))
                         ->setUser($user)
                         ->setDate(new DateTime());
                    $em->persist($noti);

                    $em->flush();
                    $text = "new investment of $$amount from ". $user->getName()." in the plan ".strtoupper($request->get('planname'));
                    $emailSender->sendTransactionMail($text, 'New Investment');
                    $emailSender->sendDepEmail(
                        $user->getEmail(),
                        'Investment Started',
                        'Your investment was started',
                        ['name' => $user->getName(), 'message' => "your investment of $".number_format((float)$amount, 2)." in the plan ".strtoupper($request->get('planname'))." has been placed successfully"]
                    );

                    noty()->addSuccess( "Investment Successful");
                    return $this->redirectToRoute('dashboard');

                }else{
                    noty()->addError( "You don't have enough money to make this investment. Please top up your account.");
                }
            } catch (\Throwable $th) {
                noty()->addError($th->getMessage());
            }
        }
        
        return $this->render('dashboard/invest.html.twig', [
            'path' => 'invest',
        ]);
    }

    #[Route('/plan/{plan}', name: 'plan')]
    public function plan(Plan $plan, Request $request, ManagerRegistry $doctrine): Response
    {
        $referrerUrl = $request->headers->get('referer');
        $parsedUrl = parse_url($referrerUrl);
        $previousPath = isset($parsedUrl['path']) ? $parsedUrl['path'] : null;
        $transactions = $doctrine->getRepository(Transaction::class)->findBy(['user'=> $this->getUser()], ['date' => 'DESC']);
        return $this->render('dashboard/plandetail.html.twig', [
            'path' => 'invest',
            'plan'=> $plan,
            'path' => str_replace('/', '',$previousPath),
            'date' => new DateTime()
        ]);
    }

    #[Route('/plans', name: 'plans')]
    public function plans(Request $request, ManagerRegistry $doctrine, PaginatorInterface $paginator): Response
    {
        $plans = $doctrine->getRepository(Plan::class)->findBy(['user' => $this->getUser()], ['id' => 'DESC']);
        $pagination = $paginator->paginate($plans, $request->query->getInt('page', 1), 10);
        
        return $this->render('dashboard/plans.html.twig', [
            'path' => 'invest',
            'pagination'=> $pagination,
            'date' => new DateTime()
        ]);
    }

    #[Route('/profile', name: 'profile')]
    public function profile(Request $request, ManagerRegistry $doctrine, PaginatorInterface $paginator): Response
    {
       
        
        return $this->render('dashboard/profile.html.twig', [
            'path' => 'invest',
            'date' => new DateTime()
        ]);
    }
    #[Route('/logout', name: 'logout')]
    public function logout(Request $request, ManagerRegistry $doctrine, PaginatorInterface $paginator): Response
    {
       session_destroy();
       return new RedirectResponse($request->getBasePath() . '/account/app-login.html');
    }
}
