<?php

namespace App\Repository;

use App\Entity\MatchArticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MatchArticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method MatchArticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method MatchArticle[]    findAll()
 * @method MatchArticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MatchArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MatchArticle::class);
    }

    // /**
    //  * @return MatchArticle[] Returns an array of MatchArticle objects
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
    public function findOneBySomeField($value): ?MatchArticle
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
