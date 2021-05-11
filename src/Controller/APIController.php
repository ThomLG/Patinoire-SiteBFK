<?php

namespace App\Controller;

use App\Entity\Stadium;
use App\Repository\StadiumRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * @Route("/api", name="api_")
 */
class APIController extends AbstractController
{
    /**
     * @Route("/stadiums/list", name="list", methods={"GET"})
     */
    public function list(StadiumRepository $stadiumRepository):Response
    {
        $stadium = $stadiumRepository->apiFindAll();
        //encodeur json
        $encoders = [new JsonEncoder()];
        //normaliseur pour convertir la collection en tableau
        $normalizers = [new ObjectNormalizer()];
        //convertion en json
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent = $serializer->serialize($stadium, 'json', [
            //pour éviter les erreurs circulaires (tableaux dans tableau)
            'circular_reference_handler' => function($object) {
                return $object->getId();
            }
        ]);
        //réponse de symfony
        $response = new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}

