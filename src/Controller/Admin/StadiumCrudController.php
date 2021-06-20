<?php

namespace App\Controller\Admin;

use App\Entity\Stadium;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
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
            TextField::new('name', 'Nom du stade',),
            TextField::new('stadiumAdress','Adresse'),
            TextField::new('stadiumCity','Ville'),
            TextField::new('stadiumPostalCode','Code postal'),
            ImageField::new('stadiumPhoto', 'Photo')->setUploadDir('public/uploads/infrastructures'),
            TextField::new('longitude','Longitude'),
            TextField::new('latitude','Latitude'),
        ];
    }
}