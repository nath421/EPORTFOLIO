<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class GenillonNathanController extends AbstractController
{
    #[Route('/genillon/nathan', name: 'app_genillon_nathan')]
    public function index(): Response
    {
        return $this->render('genillon_nathan/index.html.twig', [
            'controller_name' => 'GenillonNathanController',
        ]);
    }
}
