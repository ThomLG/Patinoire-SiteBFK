<?php

namespace App\Controller\Admin;

use App\Entity\BfkTeamOpponent;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BfkTeamOpponentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return BfkTeamOpponent::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
