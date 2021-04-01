<?php

namespace App\Controller\Admin;

use App\Entity\Stadium;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class StadiumCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Stadium::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('stadiumName', 'Nom du stade',),
            TextField::new('stadiumAdress','Adresse'),
            TextField::new('stadiumCity','Code postal'),
            ImageField::new('stadiumPhoto','Photo')->setUploadDir('public/uploads/infrastructures')
        ];
    }
}
