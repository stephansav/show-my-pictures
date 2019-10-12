<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/homepage", name="app_homepage")
     */
    public function userlogged()
    {
        return $this->render('welcome/homepage.html.twig');
    }

    /**
     * @Route("/goldenbook", name="app_goldenbook")
     */
    public function goldenBook()
    {
    }
}
