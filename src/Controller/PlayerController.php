<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\PartnerRepository;
use App\Repository\PlayerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayerController extends AbstractController
{
    /**
     * @Route("/seniors", name="seniors")
     */
    public function index(PlayerRepository $playerRepository, CategoryRepository $categoryRepository): Response
    {
        $category=$categoryRepository->findOneBy(['categoryName'=>'Seniors']);
        $players=$playerRepository->findPlayerByCategory('Seniors');
        return $this->render('player/index.html.twig', [
            'players' => $players,
            'category'=>$category
        ]);
    }

    /**
     * @Route("/feminines", name="feminines")
     */
    public function showFeminines(PlayerRepository $playerRepository, CategoryRepository $categoryRepository): Response{
        $category=$categoryRepository->findOneBy(['categoryName'=>'Féminines']);
        $players=$playerRepository->findPlayerByCategory('Féminines');
        return $this->render('player/index.html.twig', [
            'players'=>$players,
            'category'=>$category
        ]);
    }
    /**
     * @Route("/jeunes", name="jeunes")
     */
    public function showJeunes(PlayerRepository $playerRepository, CategoryRepository $categoryRepository): Response{
        $category=$categoryRepository->findOneBy(['categoryName'=>'Jeunes']);
        $players=$playerRepository->findPlayerByCategory('Jeunes');
        return $this->render('player/index.html.twig', [
            'players'=>$players,
            'category'=>$category
        ]);
    }

}
