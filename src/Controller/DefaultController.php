<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\FeedlyService;


class DefaultController extends AbstractController
{
    #[Route('/default', name: 'app_default')]
    public function index(FeedlyService $feedlyService): Response
    {


        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    #[Route('/propos', name: 'app_propos')]
    public function propos(): Response
    {

        return $this->render('default\propos.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    #[Route('/campagnes', name: 'app_campagnes')]
    public function campagnes(): Response
    {

        return $this->render('default\campagnes.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    #[Route('/don', name: 'app_don')]
    public function don(): Response
    {

        return $this->render('default\don.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    #[Route('/changementquizz', name: 'app_changementquizz')]
    public function changementquizz(): Response
    {

        return $this->render('default\changementQuizz.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    #[Route('/pluiequizz', name: 'app_pluiequizz')]
    public function pluiequizz(): Response
    {

        return $this->render('default\pluieQuizz.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    #[Route('/monteequizz', name: 'app_monteequizz')]
    public function monteequizz(): Response
    {

        return $this->render('default\monteeQuizz.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    #[Route('/jeu', name: 'app_jeu')]
    public function jeu(): Response
    {

        return $this->render('default\jeu.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    #[Route('/clim', name: 'app_clim')]
    public function clim(): Response
    {

        return $this->render('default\changement_clim.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }


}
