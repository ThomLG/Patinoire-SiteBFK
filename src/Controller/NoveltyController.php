<?php

namespace App\Controller;

use App\Repository\NoveltyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoveltyController extends AbstractController
{
    /**
     * @Route("/informations", name="novelty")
     */
    public function index(NoveltyRepository $noveltyRepository): Response
    {
        $novelties=$noveltyRepository->findAll();
        return $this->render('novelty/index.html.twig', [
            'novelties' => $novelties,
        ]);
    }

    /**
     * @Route ("/informations/{id}", name="novelty_id")
     */
    public function show(int $id, NoveltyRepository $noveltyRepository):Response
    {
        $noveltyId=$noveltyRepository->find($id);
        return $this->render('novelty/show.html.twig',[
            'noveltyId'=>$noveltyId
            ]
        );
    }
}
