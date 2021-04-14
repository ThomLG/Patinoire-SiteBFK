<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureFields(string $pageName): iterable
    {
        $out = [ TextField::new('email') ];

        if ($pageName !== 'index') {
            $out[] = TextField::new('plainPassword')
                ->setLabel('Password')
                ->setFormType(PasswordType::class)
                ->setRequired($pageName === 'new');
        }

        return array_merge($out, [
            TextField::new('lastName'),
            TextField::new('firstName'),
            TextField::new('function'),
        ]);
    }
}
