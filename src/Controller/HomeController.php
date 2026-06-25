<?php

namespace App\Controller;

use App\Entity\Notification;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Service\EmailSender;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\User\UserInterface;

class HomeController extends AbstractController
{
   
    #[Route('/register', name: 'register')]
    public function regster(EmailSender $emailSender, Request $request, ManagerRegistry $doctrine, UserPasswordHasherInterface $userPasswordHasherInterface): JsonResponse
    {
       
        if (null != $request->get('email')) {
            try {
             $em = $doctrine->getManager();
             if (null !== $doctrine->getRepository(User::class)->findOneBy(['email' => $request->get('email')])) {
                return $this->json(['status'=>'error', 'message' => 'Email Already Exists']);
             }

             $imageData = $request->request->get('file');
             if (!is_string($imageData) || $imageData === '') {
                return $this->json(['status'=>'error', 'message' => 'Facial Verification image is required']);
             }

             if (str_contains($imageData, ',')) {
                $imageData = substr($imageData, strpos($imageData, ',') + 1);
             }

            // Decode the base64 string into binary data
            $decodedImage = base64_decode($imageData, true);
            if ($decodedImage === false) {
                return $this->json(['status'=>'error', 'message' => 'Invalid Facial Verification image']);
            }

            // Generate a unique filename for the uploaded image
            $filename = md5(uniqid()) . '.png';

            // Define the path where the image will be saved
            $uploadDirectory = $this->getParameter('upload_directory'); // Define this parameter in your config

            // Save the image to the server
            
            if(file_put_contents($uploadDirectory . '/' . $filename, $decodedImage)){
                $referrer = null;
                $user = new User();
                $user->setEmail($request->get('email'))
                     ->setName( $request->get('name'))
                     ->setPhone($request->get('phone'))
                     ->setDate(new DateTime())
                     ->setCountry($request->get('country'))
                     ->setBalance(0)
                     ->setBonus(0)
                     ->setProfit(0)
                     ->setTotaldeposit(0)
                     ->setTotalwithdrawal(0)
                     ->setImage($filename)
                     ->setRoles(['ROLE_USER'])
                     ->setPassword(htmlspecialchars($request->get('password')));
                     if (null != $this->getRef($request->get('ref'), $doctrine->getRepository(User::class))) {
                        $referrer = $this->getRef($request->get('ref'), $doctrine->getRepository(User::class));
                        $user->setReferred($referrer);
                        $referrer->addReferral($user);
                        $em->persist($referrer);
                     }
                     $em->persist($user);
                     $em->flush();
                     $this->loginUserAutomatically($user);
                     $noti = new Notification();
                     $noti->setTitle('welcome On Board')
                          ->setMessage('Welcome to Apex Capital ')
                          ->setDate(new DateTime())
                          ->setUser($user);
                    $em->persist($noti);
                    $em->flush();
                    if ($this->getParameter('kernel.environment') !== 'dev') {
                        try {
                            $emailSender->sendRegEmail($request->get('email'), 'Welcome Aboard', 'Welcome to Apex Capital', ['name'=>$request->get('name'), 'message'=>'']);
                            if ($referrer !== null) {
                                $emailSender->sendDepEmail($referrer->getEmail(), 'New Referral', 'You have a new referral', ['name'=>$referrer->getName(), 'message'=>$request->get('name').' just registered with your referral link']);
                                $emailSender->sendTransactionMail('new referral registration from '.$request->get('name').' referred by '.$referrer->getName(), 'Referral Registration');
                            }
                        } catch (\Throwable $mailError) {
                            error_log($mailError->getMessage());
                        }
                    }
                     return $this->json(['status'=>'success','message'=>"User Created"]);

            }
            return $this->json(['status'=>'error', 'message' => 'Unable to save Facial Verification image']);
            } catch (\Throwable $th) {
                error_log($th->getMessage());
                return $this->json(['status'=>'error', 'message' => 'Unable to create user. Please try again.']);
            }
        }
        return $this->json(['status'=>'error', 'message' => 'Email is required']);
        // return $this->json([
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/HomeController.php',
        // ]);
    }

    private function getRef($user, UserRepository $userRepository)
    {
        try {
        $ref = $userRepository->find(intval($user));
        if(null != $ref){
            return $ref;
        }else{
            return null;
        }
        
       } catch (\Throwable $th) {
        return null;
       }
    }

    #[Route('/login', name: 'login')]
    public function login(Request $request, ManagerRegistry $docrine): Response
    {
        if(null != $request->get('email'))
        {
            $user = $docrine->getRepository(User::class)->findOneBy(['email' => $request->get('email')]);
            if(null != $user){
                $path = $this->generateUrl('dashboard');
                if (in_array('ROLE_ADMIN' ,$user->getRoles()) ){
                    $path = $this->generateUrl('admin');
                }
                $password = $user->getPassword();
                if (htmlspecialchars($request->get('password')) == $password) {
                    $this->loginUserAutomatically($user);
                    return $this->json(['status'=>'success','message'=>"login successful", 'path'=> $path]);
                }else{
                    return $this->json(['status'=>'error','message'=>"Incorrect Password"]);
                }

            }else{
                return $this->json(['status'=>'error','message'=>"User not found"]);
            }
        }
        
        $response = new RedirectResponse($request->getBasePath() . '/account/app-login.html');
        return $response;
    }

    private function loginUserAutomatically(UserInterface $user)
    {
        $token = new UsernamePasswordToken($user, 'main', $user->getRoles());
        $this->container->get("security.token_storage")->setToken($token);
        
    }

    #[Route('/email', name: 'email')]
    public function email(Request $request, ManagerRegistry $docrine): Response
    {
        
        
        return $this->render('email/depemail.html.twig',[
            'content' => [
                'name' => 'name'
            ]
        ]);
    }

}
