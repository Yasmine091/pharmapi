<?php

namespace App\Repository;

use App\Entity\Pharma;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;



/**
 * @method Pharma|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pharma|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pharma[]    findAll()
 * @method Pharma[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PharmaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pharma::class);
    }

    // /**
    //  * @return Pharma[] Returns an array of Pharma objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pharma
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
