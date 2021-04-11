<?php

namespace App\Controller\Admin;

use App\Entity\Preinscription;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PreinscriptionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Preinscription::class;
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
