<?php

namespace App\Repository;

use App\Entity\BfkTeamOpponent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BfkTeamOpponent|null find($id, $lockMode = null, $lockVersion = null)
 * @method BfkTeamOpponent|null findOneBy(array $criteria, array $orderBy = null)
 * @method BfkTeamOpponent[]    findAll()
 * @method BfkTeamOpponent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BfkTeamOpponentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BfkTeamOpponent::class);
    }

    // /**
    //  * @return BfkTeamOpponent[] Returns an array of BfkTeamOpponent objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BfkTeamOpponent
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
