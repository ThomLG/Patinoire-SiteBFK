<?php

namespace App\Repository;

use App\Entity\Category;
use App\Entity\Player;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query\Expr\Join;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Player|null find($id, $lockMode = null, $lockVersion = null)
 * @method Player|null findOneBy(array $criteria, array $orderBy = null)
 * @method Player[]    findAll()
 * @method Player[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Player::class);
    }


    /**
    * @return Player[] Returns an array of Player objects
    */


    public function findPlayerByCategory(string $categoryName)
    {
        return $this->createQueryBuilder('player')
            ->addselect('category') // il me faudra la table category pour ma requête
            ->innerJoin('player.category','category') // je lie la table categry à la table player
            ->andWhere('category.categoryName = :val') // condition ajoutée (:val (si bseoin de dynamisme ou sinon valeur en dure
            ->setParameter('val',$categoryName) // je définis le paramètre souhaité
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Player
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
