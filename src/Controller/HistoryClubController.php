<?php

namespace App\Controller;

use App\Repository\HistoryClubRepository;
use App\Repository\PartnerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HistoryClubController extends AbstractController
{
    /**
     * @Route("/histoire_club", name="history_club")
     */
    public function index(HistoryClubRepository $historyClubRepository, PartnerRepository $partnerRepository): Response
    {
        $historiesClub=$historyClubRepository->findAll();
        $partners=$partnerRepository->findAll();
        return $this->render('history_club/index.html.twig', [
            'historiesClub'=>$historiesClub,
            'partners' => $partners,
        ]);
    }
}
