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
        $coaches=$userRepository->findUserByRole("ROLE_COACH");
        return $this->render('coaches/index.html.twig',[
            'coaches'=>$coaches
        ]);

    }

    /**
     * @Route ("/conseil_administration", name="conseil_administration")
     */
    public function showConseilAdmin(UserRepository $userRepository):Response{
        $conseiladmins=$userRepository->findUserByRole("ROLE_ADMIN");
        return $this->render('conseil_administration/index.html.twig',[
            'conseiladmins'=>$conseiladmins
        ]);
    }
}
