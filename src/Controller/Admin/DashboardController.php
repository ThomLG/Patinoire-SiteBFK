<?php

namespace App\Controller\Admin;

use App\Entity\FootballMatch;
use App\Entity\Novelty;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('BFKSiteWeb');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateurs', 'icon class', User::class); //ajout des user dans le menu du dashboard easyadmin
        yield MenuItem::linkToCrud('News', 'icon class', Novelty::class); //ajout des user dans le menu du dashboard easyadmin
        yield MenuItem::linkToCrud('Matches', 'icon class', FootballMatch::class); //ajout des user dans le menu du dashboard easyadmin
    }
}
