<?php

namespace App\Controller\Admin;

use App\Entity\MatchConvocation;
use App\Form\MatchConvocationType;
use Doctrine\DBAL\Types\TextType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
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
            TextField::new('MatchConvocation','Match'),
            ArrayField::new('playerConvocation','Joueur'),
        ];
    }
}
