<?php

namespace App\Controller\Admin;

use App\Entity\FootballMatch;
use App\Entity\HistoryClub;
use App\Entity\MatchConvocation;
use App\Entity\Novelty;
use App\Entity\Partner;
use App\Entity\Player;
use App\Entity\Preinscription;
use App\Entity\Stadium;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
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
        yield MenuItem::linktoDashboard('Accueil', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateurs', 'icon class', User::class); //ajout gestion des user dans le menu du dashboard easyadmin
        yield MenuItem::linkToCrud('News', 'icon class', Novelty::class); //ajout gestion des news dans le menu du dashboard easyadmin
        yield MenuItem::linkToCrud('Matches', 'icon class', FootballMatch::class); //ajout des matches dans le menu du dashboard easyadmin
        yield MenuItem::linkToCrud('Infrastructures', 'icon class', Stadium::class);//ajout des stades dans le menu du dashboard easyadmin
        yield MenuItem::linkToCrud('Joueurs','iconclass',Player::class);
        yield MenuItem::linkToCrud('Histoire du club','iconclass',HistoryClub::class);
        yield MenuItem::linkToCrud('Partenaires','iconclass',Partner::class);
        yield MenuItem::linkToCrud('Convocations','iconclass',MatchConvocation::class);
        yield MenuItem::linkToCrud('Préinscriptions','iconclass',Preinscription::class);
        yield MenuItem::linkToRoute('Retour au site','fa fa-home','homepage');
    }

    public function configureAssets(): Assets
    {
        return Assets::new()->addCssFile('css/admin.css');
    }
}
