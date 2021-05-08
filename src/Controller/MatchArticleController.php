<?php

namespace App\Controller;

use App\Repository\MatchArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MatchArticleController extends AbstractController
{
    /**
     * @Route("/matches", name="match_articles")
     */
    public function index(MatchArticleRepository $matchArticleRepository): Response
    {
        $matcharticles= $matchArticleRepository->findAll();
        return $this->render('match_article/index.html.twig', [
            'matcharticles'=>$matcharticles
        ]);
    }

    /**
     * @Route ("/matches/{id}", name="match_id")
     */
    public function show(int $id, MatchArticleRepository $matchArticleRepository):Response
    {
        $matchId=$matchArticleRepository->find($id);
        return $this->render('match_article/show.html.twig',[
                'matchId'=>$matchId
            ]
        );
    }
}
