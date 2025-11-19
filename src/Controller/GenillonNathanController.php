<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GenillonNathanController extends AbstractController
{
    #[Route('/', name: 'app_genillon_nathan')]
    public function index(): Response
    {
        return $this->render('genillon_nathan/index.html.twig', [
            'controller_name' => 'GenillonNathanController',
        ]);
    }

    #[Route("/cv", name: "app_cv")]
    public function cv(): Response
    {
        return $this->render("genillon_nathan/cv.html.twig",);
    }
    #[Route("/portfolio", name: "app_portfolio")]
    public function portfolio(): Response
    {
        return $this->render("genillon_nathan/portfolio.html.twig",);
    }
}
