<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Contrôleur principal du portfolio
 */
final class GenillonNathanController extends AbstractController
{

    /* =========================================================
     * PAGE PRINCIPALE
     * ========================================================= */

    // Page d'accueil
    #[Route('/', name: 'app_genillon_nathan')]
    public function index(): Response
    {
        return $this->render('genillon_nathan/index.html.twig', [
            'controller_name' => 'GenillonNathanController',
        ]);
    }

    // Page CV
    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('genillon_nathan/cv.html.twig');
    }

    // Page Portfolio
    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('genillon_nathan/portfolio.html.twig');
    }

    // Page "En savoir plus"
    #[Route('/En_savoir_plus', name: 'app_En_savoir_plus')]
    public function enSavoirPlus(): Response
    {
        return $this->render('genillon_nathan/En_savoir_plus.html.twig');
    }


    /* =========================================================
     * VERSION ANGLAISE
     * ========================================================= */

    // Accueil anglais
    #[Route('/en/', name: 'app_genillon_nathan_en')]
    public function indexEn(): Response
    {
        return $this->render('genillon_nathan/EN/EN_index.html.twig');
    }

    // CV anglais
    #[Route('/en/cv', name: 'app_cv_en')]
    public function cvEn(): Response
    {
        return $this->render('genillon_nathan/EN/EN_cv.html.twig');
    }

    // Portfolio anglais
    #[Route('/en/portfolio', name: 'app_portfolio_en')]
    public function portfolioEn(): Response
    {
        return $this->render('genillon_nathan/EN/EN_portfolio.html.twig');
    }

    // En savoir plus anglais
    #[Route('/en/En_savoir_plus', name: 'app_En_savoir_plus_en')]
    public function enSavoirPlusEn(): Response
    {
        return $this->render('genillon_nathan/EN/EN_En_savoir_plus.html.twig');
    }


    /* =========================================================
     * RT1 - Administrer les réseaux et Internet
     * ========================================================= */

    // Page principale RT1
    #[Route('/RT1', name: 'app_RT1')]
    public function RT1(): Response
    {
        return $this->render(
            'genillon_nathan/RT1-Administrer_les_réseaux_et_l’Internet.html.twig'
        );
    }

    // Version anglaise RT1
    #[Route('/en/RT1', name: 'app_En_RT1')]
    public function RT1En(): Response
    {
        return $this->render(
            'genillon_nathan/EN/EN_RT1-Administrer_les_réseaux_et_l’Internet.html.twig'
        );
    }

    // AC11.01
    #[Route('/ac1101', name: 'app_ac1101')]
    public function ac1101(): Response
    {
        return $this->render('genillon_nathan/AC/ac1101.html.twig');
    }

    // Version anglaise AC11.01
    #[Route('/en/ac1101', name: 'app_En_ac1101')]
    public function ac1101En(): Response
    {
        return $this->render('genillon_nathan/EN/EN_ac1101.html.twig');
    }

    // AC11.02
    #[Route('/ac1102', name: 'app_ac1102')]
    public function ac1102(): Response
    {
        return $this->render('genillon_nathan/AC/ac1102.html.twig');
    }

    // Version anglaise AC11.02
    #[Route('/en/ac1102', name: 'app_En_ac1102')]
    public function ac1102En(): Response
    {
        return $this->render('genillon_nathan/EN/EN_ac1102.html.twig');
    }

    // AC11.03
    #[Route('/ac1103', name: 'app_ac1103')]
    public function ac1103(): Response
    {
        return $this->render('genillon_nathan/AC/ac1103.html.twig');
    }

    // Version anglaise AC11.03
    #[Route('/en/ac1103', name: 'app_En_ac1103')]
    public function ac1103En(): Response
    {
        return $this->render('genillon_nathan/EN/EN_ac1103.html.twig');
    }


    /* =========================================================
     * RT2 - Connecter les entreprises et les usagers
     * ========================================================= */

    // Page principale RT2
    #[Route('/RT2', name: 'app_RT2')]
    public function RT2(): Response
    {
        return $this->render(
            'genillon_nathan/RT2-Connecter_les_entreprises_et_les_usagers.html.twig'
        );
    }

    // Version anglaise RT2
    #[Route('/en/RT2', name: 'app_En_RT2')]
    public function RT2En(): Response
    {
        return $this->render(
            'genillon_nathan/EN/EN_RT2-Connecter_les_entreprises_et_les_usagers.html.twig'
        );
    }


    // AC12.01
    #[Route('/ac1201', name: 'app_ac1201')]
    public function ac1201(): Response
    {
        return $this->render('genillon_nathan/AC/ac1201.html.twig');
    }

    // Version anglaise AC12.01
    #[Route('/en/ac1201', name: 'app_En_ac1201')]
    public function ac1201En(): Response
    {
        return $this->render('genillon_nathan/EN/EN_ac1201.html.twig');
    }

    // AC12.03
    #[Route('/ac1203', name: 'app_ac1203')]
    public function ac1203(): Response
    {
        return $this->render('genillon_nathan/AC/ac1203.html.twig');
    }

    // Version anglaise AC12.03
    #[Route('/en/ac1203', name: 'app_En_ac1203')]
    public function ac1203En(): Response
    {
        return $this->render('genillon_nathan/EN/EN_ac1203.html.twig');
    }

    // AC12.05
    #[Route('/ac1205', name: 'app_ac1205')]
    public function ac1205(): Response
    {
        return $this->render('genillon_nathan/AC/ac1205.html.twig');
    }

    // Version anglaise AC12.05
    #[Route('/en/ac1205', name: 'app_En_ac1205')]
    public function ac1205En(): Response
    {
        return $this->render('genillon_nathan/EN/EN_ac1205.html.twig');
    }


    /* =========================================================
     * RT3 - Développer des applications informatiques
     * ========================================================= */

    // Page principale RT3
    #[Route('/RT3', name: 'app_RT3')]
    public function RT3(): Response
    {
        return $this->render(
            'genillon_nathan/RT3-Créer_des_outils_et_des_applications_informatiques_pour_les_R&T.html.twig'
        );
    }

    // Version anglaise RT3
    #[Route('/en/RT3', name: 'app_En_RT3')]
    public function RT3En(): Response
    {
        return $this->render(
            'genillon_nathan/EN/EN_RT3-Créer_des_outils_et_des_applications_informatiques_pour_les_R&T.html.twig'
        );
    }

    // AC13.01
    #[Route('/ac1301', name: 'app_ac1301')]
    public function ac1301(): Response
    {
        return $this->render('genillon_nathan/AC/ac1301.html.twig');
    }

    // Version anglaise AC13.01
    #[Route('/en/ac1301', name: 'app_En_ac1301')]
    public function ac1301En(): Response
    {
        return $this->render('genillon_nathan/EN/EN_ac1301.html.twig');
    }

    // AC13.02
    #[Route('/ac1302', name: 'app_ac1302')]
    public function ac1302(): Response
    {
        return $this->render('genillon_nathan/AC/ac1302.html.twig');
    }

    // Version anglaise AC13.02
    #[Route('/en/ac1302', name: 'app_En_ac1302')]
    public function ac1302En(): Response
    {
        return $this->render('genillon_nathan/EN/EN_ac1302.html.twig');
    }

    // AC13.03
    #[Route('/ac1303', name: 'app_ac1303')]
    public function ac1303(): Response
    {
        return $this->render('genillon_nathan/AC/ac1303.html.twig');
    }

    // Version anglaise AC13.03
    #[Route('/en/ac1303', name: 'app_En_ac1303')]
    public function ac1303En(): Response
    {
        return $this->render('genillon_nathan/EN/EN_ac1303.html.twig');
    }

}
