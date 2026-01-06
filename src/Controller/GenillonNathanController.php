<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class GenillonNathanController extends AbstractController
{
    #[Route('/', name: 'app_genillon_nathan')]
    public function index(): Response
    {
        return $this->render('genillon_nathan/index.html.twig', [
            'controller_name' => 'GenillonNathanController',
        ]);
    }

    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('genillon_nathan/cv.html.twig');
    }

    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('genillon_nathan/portfolio.html.twig');
    }

    #[Route('/En_savoir_plus', name: 'app_En_savoir_plus')]
    public function En_savoir_plus(): Response
    {
        return $this->render('genillon_nathan/En_savoir_plus.html.twig');
    }
    #[Route('/en/', name: 'app_genillon_nathan_en')]
    public function indexeEn(): Response
    {
        return $this->render('genillon_nathan/EN_index.html.twig', [
            'controller_name' => 'GenillonNathanController',
        ]);
    }
    #[Route('/en/cv', name: 'app_cv_en')]
    public function cvEn(): Response
    {
        return $this->render('genillon_nathan/EN_cv.html.twig');
    }

    #[Route('/en/portfolio', name: 'app_portfolio_en')]
    public function portfolioEn(): Response
    {
        return $this->render('genillon_nathan/EN_portfolio.html.twig');
    }

    #[Route('/en/En_savoir_plus', name: 'app_En_savoir_plus_en')]
    public function En_savoir_plusEn(): Response
    {
        return $this->render('genillon_nathan/EN_En_savoir_plus.html.twig');
    }

    #[Route('/ac1101', name: 'app_ac1101')]
    public function ac1101(): Response
    {
        return $this->render('genillon_nathan/ac1101.html.twig');
    }
    #[Route('/en/ac1101', name: 'app_En_ac1101')]
    public function ac1101En(): Response
    {
        return $this->render('genillon_nathan/EN_ac1101.html.twig');
    }
    #[Route('/ac1102', name: 'app_ac1102')]
    public function ac1102(): Response
    {
        return $this->render('genillon_nathan/ac1102.html.twig');
    }
    #[Route('/en/ac1102', name: 'app_En_ac1102')]
    public function ac1102En(): Response
    {
        return $this->render('genillon_nathan/EN_ac1102.html.twig');
    }
    #[Route('ac1103', name: 'app_ac1103')]
    public function ac1103(): Response
    {
        return $this->render('genillon_nathan/ac1103.html.twig');
    }
    #[Route('/en/ac1103', name: 'app_En_ac1103')]
    public function ac1103En(): Response
    {
        return $this->render('genillon_nathan/EN_ac1103.html.twig');
    }

}
