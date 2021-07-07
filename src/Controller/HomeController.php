<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {

        $text = "Je suis une variable String";

        $tableau = [
            'michel', 'christophe'
        ];

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'textTest' => $text,
            'tableauName' => $tableau,
        ]);
    }
}
