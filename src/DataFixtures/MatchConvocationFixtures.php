<?php

namespace App\DataFixtures;

use App\Entity\MatchConvocation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MatchConvocationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $convocation1=new MatchConvocation();



        $manager->flush();
    }
}
