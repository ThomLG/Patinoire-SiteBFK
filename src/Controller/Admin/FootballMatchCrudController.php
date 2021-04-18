<?php

namespace App\Controller\Admin;

use App\Entity\FootballMatch;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class FootballMatchCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return FootballMatch::class; // Symfony précise qu'elle est l'Entité liée au CRUD
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('footballMatchlocation', 'Lieu du match'),// j'ajoute le champ de la colonne footballMatchLocation de l'Entité FootballMatch dans le CRUD
            DateTimeField::new('footballMatchDate','Date du match'),// j'ajoute le champ de la colonne footballMatchDate de l'Entité FootballMatch dans le CRUD
            AssociationField::new('BfkTeam', 'Equipe du BFK'),// j'ajoute le champ de l'Entité BfkTeam associé à l'Entité FootballMatch  dans le CRUD
            AssociationField::new('BfkTeamOpponent', 'Equipe adverse'),// j'ajoute le champ de l'Entité BfkOpponent associé à l'Entité FootballMatch dans le CRUD
            TextField::new('result','Résultat'),// j'ajoute le champ de la colonne result de l'Entité FootballMatch dans le CRUD
        ];
    }
}
