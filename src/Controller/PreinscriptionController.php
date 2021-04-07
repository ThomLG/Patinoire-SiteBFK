<?php

namespace App\Controller;

use App\Entity\Preinscription;
use App\Form\PreinscriptionType;
use App\Repository\PartnerRepository;
use App\Repository\PreinscriptionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PreinscriptionController extends AbstractController
{
    /**
     * @Route("/preinscription", name="preinscription", methods={"GET", "POST"}))
     */

    public function new(Request $request, PartnerRepository $partnerRepository): Response
    {
        $partners = $partnerRepository->findAll();
        $preinscription = new Preinscription();
        $form = $this->createForm(PreinscriptionType::class, $preinscription);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { // vérifie les données du formulaire et si elles sont valides
            $preinscription = $form->getData(); //récupérer les données du formulaire et les mettre dans l'objet $comment
            //enregistrement en bdd
            $em = $this->getDoctrine()->getManager();
            $em->persist($preinscription);
            $em->flush();
        }
        return $this->render('preinscription/index.html.twig', [
            'preinscriptionForm' => $form->createView(),
            'partners' => $partners
        ]);
        }
}
