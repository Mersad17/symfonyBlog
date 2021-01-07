<?php

namespace App\Repository;

use App\Entity\DelfautEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DelfautEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method DelfautEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method DelfautEntity[]    findAll()
 * @method DelfautEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DelfautEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DelfautEntity::class);
    }

    // /**
    //  * @return DelfautEntity[] Returns an array of DelfautEntity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DelfautEntity
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
