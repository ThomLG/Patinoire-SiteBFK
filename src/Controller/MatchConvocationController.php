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
        $convocation=new MatchConvocation(); // Création d'une nouvelle instance pour l'entité MatchConvocation
        $form=$this->createForm(MatchConvocationType::class, $convocation);// Lié à la classe MatchConvocationType
        $form->handleRequest($request); // je récupère les données
        if ($form->isSubmitted() && $form->isValid()) { // vérifie si le formulaire a été soumis et si les données sont valides
            $convocation = $form->getData(); //récupérer les données du formulaire et les mettre dans l'objet $convocation
            //enregistrement en bdd
            $em = $this->getDoctrine()->getManager();
            $em->persist($convocation);// annonce à doctrine qu'il faut enregistrer $convocation
            $em->flush();} //envoi dans la bdd

        return $this->render('match_convocation/index.html.twig', [
            'matchConvocationForm' => $form->createView(),// j'envoie le formulaire à la vue
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
