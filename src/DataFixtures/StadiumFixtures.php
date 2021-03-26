<?php

namespace App\DataFixtures;

use App\Entity\Stadium;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StadiumFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $stadium1 = new Stadium();// on crée un nouveau stade
        $stadium1->setStadiumName("Complexe Sportif du Berry");
        $stadium1->setStadiumAdress("4 square du Berry");
        $stadium1->setStadiumCity("35000 RENNES");
        $stadium1->setStadiumPhoto("berry_stade.jpeg");
        $manager->persist($stadium1);

        $manager->flush();
    }
}
