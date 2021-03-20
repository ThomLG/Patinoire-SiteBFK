<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encoder;
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder=$encoder;
    }

    public function load(ObjectManager $manager)
    {
        $admin1=new User();
        $admin1->setLastName("Canipel");
        $admin1->setFirstName("Kévin");
        $admin1->setFunction("Président");
        $admin1->setEmail("kevin.canipel@gmail.com");
        $admin1->setRoles(['ROLE_ADMIN']);
        $password=$this->encoder->encodePassword($admin1, "bfk35");
        $admin1->setPassword($password);
        $manager->persist($admin1);


        $user1=new User();
        $user1->setLastName("Régnier");
        $user1->setFirstName("Romain");
        $user1->setFunction("Entraîneur");
        $user1->setEmail("romain.regnier@gmail.com");
        $password=$this->encoder->encodePassword($user1, "coach35");
        $user1->setPassword($password);
        $manager->persist($user1);

        $manager->flush();
    }
}
