<?php

namespace App\Controller\Admin;

use App\Entity\HistoryClub;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class HistoryClubCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return HistoryClub::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('HistoryClubText','Texte de l\'histoire du club'),
            ImageField::new('historyClubPicture','Photo de l\'équipe historique')->setUploadDir('public/uploads/infrastructures')
        ];
    }
}
