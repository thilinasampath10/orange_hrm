<?php

namespace App\Repository;

use App\Entity\Employeetable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Employeetable|null find($id, $lockMode = null, $lockVersion = null)
 * @method Employeetable|null findOneBy(array $criteria, array $orderBy = null)
 * @method Employeetable[]    findAll()
 * @method Employeetable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmployeetableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Employeetable::class);
    }

    // /**
    //  * @return Employeetable[] Returns an array of Employeetable objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Employeetable
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
