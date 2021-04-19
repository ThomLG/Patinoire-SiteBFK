<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response{
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @Route ("/staff_sportif", name="staff")
     */

    public function showStaff(UserRepository $userRepository):Response {
        $coaches=$userRepository->findUserrByFonction("Entraineur");
        return $this->render('coaches/index.html.twig',[
            'coaches'=>$coaches
        ]);

    }
}
