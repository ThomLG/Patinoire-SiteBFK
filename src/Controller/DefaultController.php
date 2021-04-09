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
     * @Route("/", name="homepage", methods={"GET|POST"})
     */
    public function index(NoveltyRepository $noveltyRepository, MatchArticleRepository $matchArticleRepository): Response
    {
        //afficher le dernier match par ordre chronologique décroissant
        $matcharticles=$matchArticleRepository->findBy([],["date"=>"DESC"], 1); // on filtre par date décroissante
        //afficher la liste des nouveautés
        $novelties=$noveltyRepository->findBy([], ['noveltyDate'=>"DESC"],5);// on filtre par date décroisssante les novelties et on les limite à 5
        return $this->render('default/index.html.twig', [
            'matcharticles'=>$matcharticles,
            'novelties'=>$novelties
        ]);
    }
}

