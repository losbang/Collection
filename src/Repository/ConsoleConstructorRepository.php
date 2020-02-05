<?php

namespace App\Repository;

use App\Entity\ConsoleConstructor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ConsoleConstructor|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConsoleConstructor|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConsoleConstructor[]    findAll()
 * @method ConsoleConstructor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConsoleConstructorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConsoleConstructor::class);
    }

    // /**
    //  * @return ConsoleConstructor[] Returns an array of ConsoleConstructor objects
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
    public function findOneBySomeField($value): ?ConsoleConstructor
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
