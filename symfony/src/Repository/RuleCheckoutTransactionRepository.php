<?php

namespace App\Repository;

use App\Entity\RuleCheckoutTransaction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RuleCheckoutTransaction|null find($id, $lockMode = null, $lockVersion = null)
 * @method RuleCheckoutTransaction|null findOneBy(array $criteria, array $orderBy = null)
 * @method RuleCheckoutTransaction[]    findAll()
 * @method RuleCheckoutTransaction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RuleCheckoutTransactionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RuleCheckoutTransaction::class);
    }

    // /**
    //  * @return RuleCheckoutTransaction[] Returns an array of RuleCheckoutTransaction objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RuleCheckoutTransaction
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
