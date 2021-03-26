<?php

namespace App\Controller;

use App\Repository\NoveltyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoveltyController extends AbstractController
{
    /**
     * @Route("/novelty", name="novelty")
     */
    public function index(NoveltyRepository $noveltyRepository): Response
    {
        $novelties=$noveltyRepository->findAll();
        return $this->render('novelty/index.html.twig', [
            'novelties' => $novelties,
        ]);
    }
}
