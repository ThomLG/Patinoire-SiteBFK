<?php

namespace App\Controller;

use App\Repository\PartnerRepository;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PartnerController extends AbstractController
{
    /**
     * @Route("/partenaires", name="partner")
     */
    public function index(PartnerRepository $partnerRepository): Response
    {
            //afficher la liste des partenaires
            $partners=$partnerRepository->findAll();
            return $this->render('partner/index.html.twig', [
                'partners' => $partners,
        ]);

    }

    public function partnerblock(PartnerRepository $partnerRepository):Response
    {
        //afficher la liste des partenaires pour le bloc sur chq page
        $partners=$partnerRepository->findBy([],["partnerName"=>"ASC"]);
        return $this->render('partner/partnersBlock/_partnersBlock.html.twig',[
            'partners'=>$partners,
        ]);
    }
}
