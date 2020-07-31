<?php

namespace App\Repository;

use App\Entity\Usertable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Usertable|null find($id, $lockMode = null, $lockVersion = null)
 * @method Usertable|null findOneBy(array $criteria, array $orderBy = null)
 * @method Usertable[]    findAll()
 * @method Usertable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsertableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Usertable::class);
    }

    // /**
    //  * @return Usertable[] Returns an array of Usertable objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Usertable
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
