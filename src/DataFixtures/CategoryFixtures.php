<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $category1 = new Category();
        $category1->setCategoryName("Seniors");
        $manager->persist($category1);
        $this->addReference("Seniors", $category1);


        $category2 = new Category();
        $category2->setCategoryName("Féminines");
        $manager->persist($category2);
        $this->addReference("Féminines", $category2);

        $manager->flush();
    }
}
