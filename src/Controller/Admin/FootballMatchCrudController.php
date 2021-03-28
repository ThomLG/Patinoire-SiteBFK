<?php

namespace App\Controller\Admin;

use App\Entity\FootballMatch;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class FootballMatchCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return FootballMatch::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('footballMatchlocation', 'Lieu du match'),// ajout le champ lieu du match
            DateTimeField::new('footballMatchDate','Date du match'),// ajout du champ date
            TextField::new('result','Résultat'),//ajout du champ résultat
            AssociationField::new('BfkTeam'),
            AssociationField::new('BfkTeamOpponent'),
        ];
    }
}
