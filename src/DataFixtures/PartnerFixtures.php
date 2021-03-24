<?php

namespace App\DataFixtures;

use App\Entity\Partner;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PartnerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $partner1=new Partner(); // on crée un nouveau partner
        $partner1->setPartnerName('Gwenneg');
        $partner1->setPartnerDescription("Gwenneg sponsor 1");
        $partner1->setPartnerLogo("gwenneg_logo_noir.png");
        $partner1->setPartnerLogo2("gwenneg_logo_blanc.png");
        $manager->persist($partner1); // annonce à doctrine qu'il faut enregistrer $partner1

        $partner2=new Partner();
        $partner2->setPartnerName('Crédit Agricole');
        $partner2->setPartnerDescription("CA sponsor 2");
        $partner2->setPartnerLogo("ca_noir.png");
        $partner2->setPartnerLogo2("ca_blanc.png");
        $manager->persist($partner2);

        $partner3=new Partner();
        $partner3->setPartnerName('Radio Roazhon');
        $partner3->setPartnerDescription("Radio Roazhon sponsor 3");
        $partner3->setPartnerLogo("radio_roazhon_logo.png");
        $partner3->setPartnerLogo2("radio_roazhon_logo.png");
        $manager->persist($partner3);

        $partner4=new Partner();
        $partner4->setPartnerName('So Burrito');
        $partner4->setPartnerDescription("So Burrito sponsor 4");
        $partner4->setPartnerLogo("so_burrito_logo.png");
        $partner4->setPartnerLogo2("so_burrito_logo.png");
        $manager->persist($partner4);

        $partner5=new Partner();
        $partner5->setPartnerName('AXA');
        $partner5->setPartnerDescription("AXA sponsor 5");
        $partner5->setPartnerLogo("axa_logo_noir.png");
        $partner5->setPartnerLogo2("axa_logo_blanc.png");
        $manager->persist($partner5);

        $partner6=new Partner();
        $partner6->setPartnerName('3 Brasseurs');
        $partner6->setPartnerDescription("3 Brasseurs sponsor 6");
        $partner6->setPartnerLogo("3brasseurs_logo.png");
        $partner6->setPartnerLogo2("3brasseurs_logo.png");
        $manager->persist($partner6);

        $partner7=new Partner();
        $partner7->setPartnerName('Daskemm');
        $partner7->setPartnerDescription("Daskemm sponsor 7");
        $partner7->setPartnerLogo("daskemm_logo_noir.png");
        $partner7->setPartnerLogo2("daskemm_logo_blanc.png");
        $manager->persist($partner7);

        $manager->flush(); // mise à jour de la bdd
    }
}
