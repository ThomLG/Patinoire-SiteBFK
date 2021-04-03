<?php

namespace App\Controller\Admin;

use App\Entity\Player;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PlayerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Player::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('lastName', 'Nom',),
            TextField::new('firstName','Prénom'),
            TextField::new('position','Position'),
            DateField::new('dateOfBirth','Date de naissance')->renderAsText(),
            TextField::new('nbMatches','Nombre de matches'),
            TextField::new('nbGoals','Nombre de buts'),
            TextField::new('nbAssits','Nombre de passes décisives'),
            ImageField::new('playerPhoto','Photo du joueur')->setUploadDir('public/uploads/infrastructures'),
            AssociationField::new('category','Catégorie du joueur')
        ];
    }

}
