<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\PlayerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayerController extends AbstractController
{
    /**
     * @Route("/players", name="players")
     */
    public function index(PlayerRepository $playerRepository): Response
    {
        $players = $playerRepository->findAll();

        $seniorsPlayers=$playerRepository->findPlayerByCategory('Seniors');
        $femininesPlayers=$playerRepository->findPlayerByCategory('Féminines');
        return $this->render('player/index.html.twig', [
            'players' => $players,
            'seniorsplayers'=>$seniorsPlayers,
            'femininesplayers'=>$femininesPlayers
        ]);
    }

}
