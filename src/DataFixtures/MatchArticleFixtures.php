<?php

namespace App\DataFixtures;

use App\Entity\MatchArticle;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MatchArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $article1=new MatchArticle();// on crée un nouvel article;
        $article1->setArticleTitle("BREIZH FOBAL KLUB A - LA VITREEENNE B : 1-1");
        $article1->setArticleDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum");
        $article1->setDate(new \DateTime('now'));
        $article1->setMathPhoto("bfk1_vitréenne2.jpg");


        $manager->persist($article1);
        $manager->flush();
    }
}
