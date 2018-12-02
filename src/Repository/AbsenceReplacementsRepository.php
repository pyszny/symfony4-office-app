<?php

namespace App\Repository;

use App\Entity\AbsenceReplacements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AbsenceReplacements|null find($id, $lockMode = null, $lockVersion = null)
 * @method AbsenceReplacements|null findOneBy(array $criteria, array $orderBy = null)
 * @method AbsenceReplacements[]    findAll()
 * @method AbsenceReplacements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AbsenceReplacementsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AbsenceReplacements::class);
    }

    // /**
    //  * @return AbsenceReplacements[] Returns an array of AbsenceReplacements objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AbsenceReplacements
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
