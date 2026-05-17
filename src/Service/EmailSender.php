<?php

namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

class EmailSender
{
    public function __construct(
        private readonly MailerInterface $mailer,
        private readonly string $mailFromAddress,
        private readonly string $mailFromName,
        private readonly string $mailAdminAddress,
    ) {
    }

    public function sendRegEmail($to, $subject, $title, $content)
    {
        $email = (new TemplatedEmail())
            ->from($this->sender())
            ->to($to)
            ->subject($subject)
            ->htmlTemplate('email/regemail.html.twig')
            ->context([
                'title' => $title,
                'content' => $content,
            ]);

        $admMail = (new Email());
        $admMail->from($this->sender())
                ->to($this->mailAdminAddress)
                ->subject('New User Registration')
                ->text("new user registration from ".$content['name']);

        $this->mailer->send($email);
        $this->mailer->send($admMail);
    }

    public function sendTransactionMail($text, $subject)
    {

        $admMail = (new Email());
        $admMail->from($this->sender())
                ->to($this->mailAdminAddress)
                ->subject($subject)
                ->text($text);
        $this->mailer->send($admMail);
    }

    public function sendDepEmail($to, $subject, $title, $content)
    {
        $email = (new TemplatedEmail())
            ->from($this->sender())
            ->to($to)
            ->subject($subject)
            ->htmlTemplate('email/depemail.html.twig')
            ->context([
                'title' => $title,
                'content' => $content,
            ]);

        $this->mailer->send($email);
    }

    private function sender(): Address
    {
        return new Address($this->mailFromAddress, $this->mailFromName);
    }

}
