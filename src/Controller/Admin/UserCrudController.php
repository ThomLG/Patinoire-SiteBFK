<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class ;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            EmailField::new('email','E-mail'),
            TextField::new('password','Mot de passe'),
            ArrayField::new('roles'),
            TextField::new('function', 'Fonction'),
            TextField::new('firstName','Prénom'),
            TextField::new('lastName', 'Nom'),
            ImageField::new('photoUser','Photo dirigeant')->setUploadDir('public/uploads/players_photos'),
        ];
    }

}
