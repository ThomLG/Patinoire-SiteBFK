<?php

namespace App\DataFixtures;

use App\Entity\BfkTeam;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BfkTeamFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $bfkTeam1 = new BfkTeam();
        $bfkTeam1->setBfkTeamName("Breizh Fobal Klub A");
        $bfkTeam1->setBfkTeamLogo("logo_club.png");
        $manager->persist($bfkTeam1);

        //enregistre l'équipe bfkteam1 dans une référence
        $this->addReference('bfkTeam1' ,$bfkTeam1);
        $manager->flush();
    }
}
