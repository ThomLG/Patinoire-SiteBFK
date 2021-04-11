<?php

namespace App\Controller\Admin;

use App\Entity\MatchConvocation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class MatchConvocationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MatchConvocation::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('matchConvocation','Match'),
            CollectionField::new('playerConvocation','Joueur'),
        ];
    }
}
