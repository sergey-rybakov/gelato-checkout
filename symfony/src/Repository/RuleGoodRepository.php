<?php

namespace App\Repository;

use App\Entity\RuleGood;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RuleGood|null find($id, $lockMode = null, $lockVersion = null)
 * @method RuleGood|null findOneBy(array $criteria, array $orderBy = null)
 * @method RuleGood[]    findAll()
 * @method RuleGood[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RuleGoodRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RuleGood::class);
    }

    // /**
    //  * @return RuleGood[] Returns an array of RuleGood objects
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
    public function findOneBySomeField($value): ?RuleGood
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
