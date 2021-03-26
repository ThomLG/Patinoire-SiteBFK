<?php

namespace App\Controller\Admin;

use App\Entity\FootballMatch;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
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
            TextField::new('footballMatchlocation', 'Lieu du match'),
        ];
    }
}
