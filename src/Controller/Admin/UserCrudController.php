<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class ;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index','Dirigeants');
    }

    public function configureFields(string $pageName): iterable
    {
            $out =[EmailField::new('email','E-mail')];

            // si le mot de passe est modifié
            if ($pageName !=='index') {
                $out[] = TextField::new('plainPassword')
                    ->setLabel('Mot de passe')
                    ->setFormType(PasswordType::class)
                    ->setRequired($pageName === 'new');
            }

            return array_merge($out,[
            //array_merge() rassemble les éléments d'un ou de plusieurs tableaux en ajoutant les valeurs de l'un à la fin de l'autre
            ArrayField::new('roles','Rôle'),
            TextField::new('function', 'Fonction'),
            TextField::new('firstName', 'Prénom'),
            TextField::new('lastName', 'Nom'),
            ImageField::new('photoUser', 'Photo dirigeant')
                ->setUploadDir('public/uploads/players_photos')
            ]);
    }
}
