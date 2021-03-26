<?php

namespace App\DataFixtures;

use App\Entity\Novelty;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class NoveltyFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $novelty1 = new Novelty();
        $novelty1->setNoveltyTitle("Arrêt des compétitions");
        $novelty1->setNoveltyContent("SAISON 2020/2021
C'est officiel depuis aujourd'hui, et pour la raison que l'on connaît malheureusement tous, la saison 2020/2021 de football amateur est terminée, entraînant une saison blanche pour toutes les compétitions amateurs, sans aucune montée ni descente.
Le Breizh Fobal Klub verra donc ses 3 équipes évoluer en D1, D3 et D4 la saison prochaine, comme cette année. 
Nous souhaitons remercier tous nos partenaires qui nous ont accompagnés dans cette saison si particulière, nos fidèles supporters, ainsi que tous ceux qui suivent le BFK sur les réseaux sociaux !
On vous dit donc à la saison prochaine sur les terrains !
Kenavo ! #BevetBFK #BFK");
        $novelty1->setNoveltyDate(new \DateTime('now'));
        $manager->persist($novelty1);

        $novelty2=new Novelty();
        $novelty2->setNoveltyTitle("Bonne Année 2021");
        $novelty2->setNoveltyContent("BONNE ANNÉE 2021!
Qu'ils ressemblent à des champs de patates avec des lignes de travers, qu'ils soient synthétiques, ou même stabilisés... tout ce qu'on espère en 2021 c'est de pouvoir retrouver les terrains.
Le BFK vous souhaite une très bonne année 2021 !");
        $novelty2->setNoveltyDate(new \DateTime('now'));
        $manager->persist($novelty2);


        $manager->flush();
    }
}
