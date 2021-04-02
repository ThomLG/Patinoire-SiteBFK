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
    public function index(PlayerRepository $playerRepository, CategoryRepository $categoryRepository, PartnerRepository $partnerRepository): Response
    {
        $category=$categoryRepository->findOneBy(['categoryName'=>'Seniors']);
        $partners=$partnerRepository->findAll();
        $players=$playerRepository->findPlayerByCategory('Seniors');
        return $this->render('player/index.html.twig', [
            'players' => $players,
            'partners'=>$partners,
            'category'=>$category
        ]);
    }

    /**
     * @Route("/feminines", name="feminines")
     */
    public function showFeminines(PlayerRepository $playerRepository, CategoryRepository $categoryRepository, PartnerRepository $partnerRepository): Response{
        $category=$categoryRepository->findOneBy(['categoryName'=>'Féminines']);
        $players=$playerRepository->findPlayerByCategory('Féminines');
        $partners=$partnerRepository->findAll();
        return $this->render('player/index.html.twig', [
            'players'=>$players,
            'partners'=>$partners,
            'category'=>$category
        ]);
    }

}
