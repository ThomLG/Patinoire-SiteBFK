<?php

namespace App\Controller;

use App\Entity\MatchConvocation;
use App\Form\MatchConvocationType;
use App\Repository\MatchConvocationRepository;
use App\Repository\PartnerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MatchConvocationController extends AbstractController
{
    /**
     * @Route("/match_convocation", name="match_convocation")
     */
    public function index(Request $request): Response
    {
        $convocation=new MatchConvocation();
        $form=$this->createForm(MatchConvocationType::class, $convocation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { // vérifie les données du formulaire et si elles sont valides
            $convocation = $form->getData(); //récupérer les données du formulaire et les mettre dans l'objet $comment
            //enregistrement en bdd
            $em = $this->getDoctrine()->getManager();
            $em->persist($convocation);
            $em->flush();}

        return $this->render('match_convocation/index.html.twig', [
            'matchConvocationForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/convocations", name="convocations")
     */
    public function convocationListe(MatchConvocationRepository $matchConvocationRepository):Response
    {
        $convocations=$matchConvocationRepository->findAll();
        return $this->render('match_convocation/convocations.html.twig', [
            'convocations' => $convocations
        ]);
    }


}
