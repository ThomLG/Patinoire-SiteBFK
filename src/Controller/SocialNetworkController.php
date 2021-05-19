<?php

namespace App\Controller;


use App\Repository\SocialNetworksRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class SocialNetworkController extends AbstractController
{
    /**
     * @Route("/social_network", name="socialnetwork")
     */
    public function socialnetworkblock(SocialNetworksRepository $socialNetworksRepository):Response
    {
        //afficher la liste des partenaires pour le bloc sur chq page
        $socialNetworks=$socialNetworksRepository->findAll();
        return $this->render('social_network/_social_networkBlock.html.twig',[
            'socialNetworks'=>$socialNetworks
        ]);
    }
}
