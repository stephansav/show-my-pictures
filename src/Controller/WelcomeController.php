<?php

namespace App\Controller;

use App\Entity\Goldenbook;
use App\Form\GoldenbookType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function goldenBook(Request $request)
    {
        $goldenbook = new Goldenbook();
        $goldenbook->setName('Write your name');
        $goldenbook->setComment('Write a comment');
        $goldenbook->setCommentDate(new \DateTime());

        $entityManager = $this->getDoctrine()->getManager();
        $goldenBookRepository = $entityManager->getRepository(Goldenbook::class);
        $listComments = $goldenBookRepository->findAll();

        $form = $this->createForm(GoldenbookType::class, $goldenbook);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $goldenbook = $form->getData();
            $entityManager->persist($goldenbook);
            $entityManager->flush();

            return $this->redirectToRoute('app_goldenbook');
        }

        return $this->render('welcome/comment.html.twig', [
            'form' => $form->createView(),
            'list_comments' => $listComments,
        ]);
    }
}
