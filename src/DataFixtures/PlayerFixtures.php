<?php

namespace App\DataFixtures;

use App\Entity\Player;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PlayerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $category1=$this->getReference('Seniors');
        $category2=$this->getReference('Féminines');

        $player1= new Player();
        $player1->setLastName("Martin");
        $player1->setFirstName("Jean");
        $player1->setPosition("Gardien de But");
        $player1->setDateOfBirth(new \DateTime('1997-01-31'));
        $player1->setNbMatches('0');
        $player1->setNbGoals('0');
        $player1->setNbAssits('0');
        $player1->setCategory($category1);
        $manager->persist($player1);

        $player2= new Player();
        $player2->setLastName("Vincent");
        $player2->setFirstName("Marie");
        $player2->setPosition("Gardien de But");
        $player2->setDateOfBirth(new \DateTime('1997-01-31'));
        $player2->setNbMatches('0');
        $player2->setNbGoals('0');
        $player2->setNbAssits('0');
        $player2->setCategory($category2);
        $manager->persist($player2);




        $manager->flush();
    }
}
