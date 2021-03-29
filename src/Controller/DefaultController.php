<?php

namespace App\Controller;

use App\Repository\MatchArticleRepository;
use App\Repository\NoveltyRepository;
use App\Repository\PartnerRepository;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(PartnerRepository $partnerRepository, NoveltyRepository $noveltyRepository, MatchArticleRepository $matchArticleRepository): Response
    {
        //afficher le dernier match par ordre chronologique décroissant
        $matcharticles=$matchArticleRepository->findBy([],["date"=>"DESC"], 1); // on filtre par date décroissante

        $novelties=$noveltyRepository->findBy([], ['noveltyDate'=>"DESC"],5);// on filtre par date décroisssante les novelties et on les limite à 5

        //afficher la liste des partenaires
        $partners=$partnerRepository->findBy([],["partnerName"=>"ASC"]);

        return $this->render('default/homepage.html.twig', [
            'matcharticles'=>$matcharticles,
            'partners' => $partners,
            'novelties'=>$novelties
        ]);
    }

}

