<?php

namespace App\DataFixtures;

use App\Entity\BfkTeamOpponent;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BfkTeamOpponentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $opponent1 = new BfkTeamOpponent();
        $opponent1->setOpponentName("La Vitréenne B");
        $opponent1->setOpponentLogo("logo_vitréenne.png");
        $manager->persist($opponent1);

        //enregistre l'équipe bfkteam1 dans une référence
        $this->addReference('opponent1' ,$opponent1);
        $manager->flush();
    }
}
