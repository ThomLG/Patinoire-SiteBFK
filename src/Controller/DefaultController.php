<?php

namespace App\Controller;

use App\Repository\FootballMatchRepository;
use App\Repository\MatchArticleRepository;
use App\Repository\NoveltyRepository;
use App\Repository\PartnerRepository;
use App\Repository\SocialNetworksRepository;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage", methods={"GET|POST"})
     */
    public function index(FootballMatchRepository $footballMatchRepository, NoveltyRepository $noveltyRepository, MatchArticleRepository $matchArticleRepository, SocialNetworksRepository $socialNetworksRepository): Response
    {
        //afficher le futur match
        $nextFootballMatches=$footballMatchRepository->findBy([],["footballMatchDate"=>"DESC"], 1);
        //afficher le dernier match par ordre chronologique décroissant
        $matcharticles=$matchArticleRepository->findBy([],["date"=>"DESC"], 1); // on filtre par date décroissante
        //afficher la liste des nouveautés
        $novelties=$noveltyRepository->findBy([], ['noveltyDate'=>"DESC"],5);// on filtre par date décroisssante les novelties et on les limite à 5
        return $this->render('default/index.html.twig', [
            'nextFootballMatches'=>$nextFootballMatches,
            'matcharticles'=>$matcharticles,
            'novelties'=>$novelties,
        ]);
    }

    /**
     * @Route("/mentions_legales", name="legal_mentions")
     */
    public function mentionsLegales():Response
    {
        // Nous générons la vue de la page des mentions légales
        return $this->render('legal_mentions/legal_mentions.html.twig');
    }
}

