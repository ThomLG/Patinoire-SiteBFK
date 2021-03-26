<?php

namespace App\DataFixtures;

use App\Entity\FootballMatch;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FootballMatchFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $bfkTeam=$this->getReference('bfkTeam1');
        $opponent=$this->getReference('opponent1');

        $match1 = new FootballMatch();
        $match1->setFootballMatchLocation("Stade Paul Lafargue");
        $match1->setResult("1-1");
        $match1->setBfkTeam($bfkTeam);
        $match1->setBfkTeamOpponent($opponent);

        $manager->persist($match1);
        $manager->flush();
    }

}
