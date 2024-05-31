<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AppController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/about', name: 'about')]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route('/portfolio', name: 'portfolio')]
    public function portfolio(): Response
    {
        return $this->render('portfolio.html.twig');
    }
}