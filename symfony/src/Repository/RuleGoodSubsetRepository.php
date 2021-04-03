<?php

namespace App\Repository;

use App\Entity\RuleGoodSubset;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RuleGoodSubset|null find($id, $lockMode = null, $lockVersion = null)
 * @method RuleGoodSubset|null findOneBy(array $criteria, array $orderBy = null)
 * @method RuleGoodSubset[]    findAll()
 * @method RuleGoodSubset[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RuleGoodSubsetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RuleGoodSubset::class);
    }

    // /**
    //  * @return RuleGoodSubset[] Returns an array of RuleGoodSubset objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RuleGoodSubset
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
