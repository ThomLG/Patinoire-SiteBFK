<?php

namespace App\Controller;

use App\Repository\PartnerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(PartnerRepository $partnerRepository): Response
    {
        //afficher la liste des partenaires
        $partners=$partnerRepository->findBy([],["partnerName"=>"ASC"]);
        return $this->render('default/index.html.twig', [
            'partners' => $partners,
        ]);
    }
}
