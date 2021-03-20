<?php

namespace App\Repository;

use App\Entity\MatchConvocation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MatchConvocation|null find($id, $lockMode = null, $lockVersion = null)
 * @method MatchConvocation|null findOneBy(array $criteria, array $orderBy = null)
 * @method MatchConvocation[]    findAll()
 * @method MatchConvocation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatchConvocationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MatchConvocation::class);
    }

    // /**
    //  * @return MatchConvocation[] Returns an array of MatchConvocation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MatchConvocation
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
