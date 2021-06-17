<?php

namespace App\Controller;

use App\Repository\FootballMatchRepository;
use App\Repository\PartnerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\IsNull;

class FootballMatchController extends AbstractController
{
    /**
     * @Route("/resultats", name="results")
     */
    public function index(FootballMatchRepository $footballMatchRepository): Response
    {
        $results=$footballMatchRepository-> findByResult();
        return $this->render('football_match/index.html.twig', [
            'results' => $results,
        ]);
    }

    /**
     * @Route("/calendrier", name="calendar")
     */

    public function calendar(FootballMatchRepository $footballMatchRepository):Response
    {
        $calendars=$footballMatchRepository->findBy(['result'=>null]);
        return $this->render('football_match/calendar.html.twig',[
            'calendars'=>$calendars
        ]);
    }
}
