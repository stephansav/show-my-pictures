<?php

namespace App\Repository;

use App\Entity\Goldenbook;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Goldenbook|null find($id, $lockMode = null, $lockVersion = null)
 * @method Goldenbook|null findOneBy(array $criteria, array $orderBy = null)
 * @method Goldenbook[]    findAll()
 * @method Goldenbook[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GoldenbookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Goldenbook::class);
    }

    // /**
    //  * @return Goldenbook[] Returns an array of Goldenbook objects
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
    public function findOneBySomeField($value): ?Goldenbook
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
