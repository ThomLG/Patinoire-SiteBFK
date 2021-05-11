<?php

namespace App\Controller;

use App\Entity\Stadium;
use App\Repository\PartnerRepository;
use App\Repository\StadiumRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StadiumController extends AbstractController
{
    /**
     * @Route("/infrastructures", name="infrastructures")
     */
    public function index(StadiumRepository $stadiumRepository): Response
    {
        $stadiums = $stadiumRepository->findAll();
        return $this->render('stadium/index.html.twig', [
            'stadiums' => $stadiums,
        ]);
    }
}
