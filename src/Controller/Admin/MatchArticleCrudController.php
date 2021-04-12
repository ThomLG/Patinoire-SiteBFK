<?php

namespace App\Controller\Admin;

use App\Entity\MatchArticle;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MatchArticleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MatchArticle::class;
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
