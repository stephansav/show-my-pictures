<?php // src/Controller/DefaultController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
    public function index(Request $request): Response 
    {
        //return new Response("Hello $name !");

        //return $this->render('base.html.twig', array(
        //    'name' => $request->get('name', 'World')
        //));

        //$package = new Package(new StaticVersionStrategy('v1', '%s?version=%s')); 

        return $this->render('base.html.twig', [
            'name' => $request->get('name', 'world')
        ]);
    }

    public function simple()
    {
        return new Response('Simple! Easy! Great!');
    }
}
