<?php

namespace App\Controller;

use App\Repository\FootballMatchRepository;
use App\Repository\PartnerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FootballMatchController extends AbstractController
{
    /**
     * @Route("/resultats", name="results")
     */
    public function index(PartnerRepository $partnerRepository, FootballMatchRepository $footballMatchRepository): Response
    {
        $partners=$partnerRepository->findAll();
        $results=$footballMatchRepository->findAll();
        return $this->render('football_match/index.html.twig', [
            'partners'=>$partners,
            'results' => $results,
        ]);
    }
}
