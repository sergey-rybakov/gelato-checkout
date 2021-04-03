<?php

namespace App\Repository;

use App\Entity\RuleSession;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RuleSession|null find($id, $lockMode = null, $lockVersion = null)
 * @method RuleSession|null findOneBy(array $criteria, array $orderBy = null)
 * @method RuleSession[]    findAll()
 * @method RuleSession[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RuleSessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RuleSession::class);
    }

    // /**
    //  * @return RuleSession[] Returns an array of RuleSession objects
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
    public function findOneBySomeField($value): ?RuleSession
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
