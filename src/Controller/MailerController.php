<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class MailerController extends AbstractController
{
    /**
     * @Route("/email")
     */
    public function sendEmail(MailerInterface $mailer)
    {
        $email = (new Email())
            ->from('brikant@gmail.com')
            ->to('stephansav@gmail.com')
            ->subject('Registration email')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration</p>')
        ;

        $mailer->send($email);
    }
}
