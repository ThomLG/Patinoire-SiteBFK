<?php

namespace App\Controller\Admin;

use App\Entity\Novelty;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NoveltyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Novelty::class;
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
