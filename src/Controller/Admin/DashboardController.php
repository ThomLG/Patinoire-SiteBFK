<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\FootballMatch;
use App\Entity\HistoryClub;
use App\Entity\MatchConvocation;
use App\Entity\Novelty;
use App\Entity\Partner;
use App\Entity\Player;
use App\Entity\Preinscription;
use App\Entity\SocialNetworks;
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
    // Dans un premier temps, je définis la route de mon Dashboard d'administration.
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
            ->setTitle('BFKSiteWeb');// Je définis ici le nom du titre du Dashboard EasyAdmin

    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Accueil', 'fa fa-home');// ajout d'un lien vers la page d'accueil du dashboard
        yield MenuItem::linkToCrud('Utilisateurs', 'icon class', User::class); //ajout du CRDUD gestion de l'entité User dans le menu du dashboard easyadmin
        yield MenuItem::linkToCrud('News', 'icon class', Novelty::class); //ajout du CRUD gestion de l'entité Novelty dans le menu du dashboard easyadmin
        yield MenuItem::linkToCrud('Matches', 'icon class', FootballMatch::class); //ajout du CRUD de l'entité FootballMatch dans le menu du dashboard easyadmin
        yield MenuItem::linkToCrud('Joueurs','iconclass',Player::class);//ajout du CRUD de l'entité Stadium stades dans le menu du dashboard easyadmin
        yield MenuItem::linkToCrud('Histoire du club','iconclass',HistoryClub::class);//ajout du CRUD de l'entité historyclub dans le menu du dashboard easyadmin
        yield MenuItem::linkToCrud('Infrastructures','iconclass',Stadium::class);//ajout du CRUD de l'entité Stadium stades dans le menu du dashboard easyadmin
        yield MenuItem::linkToCrud('Partenaires','iconclass',Partner::class);//ajout du CRUD de l'entité Partner dans le menu du dashboard easyadmin
        yield MenuItem::linkToCrud('Convocations','iconclass',MatchConvocation::class);//ajout du CRUD de l'entité  MatchConvocation dans le menu du dashboard easyadmin
        yield MenuItem::linkToCrud('Préinscriptions','iconclass',Preinscription::class);//ajout du CRUD de l'entité Preinscription dans le menu du dashboard easyadmin
        yield MenuItem::linkToCrud('Catégories', 'iconclass', Category::class);
        yield MenuItem::linkToRoute('Retour au site','fa fa-home','homepage');// ajout d'un lien de redirection vers la page d'accueil du site web
        yield MenuItem::linkToCrud('Réseaux Sociaux','fa fa-home',SocialNetworks::class);
    }

    public function configureAssets(): Assets
    {
        return Assets::new()->addCssFile('css/admin.css');
    }
}
