<?php

namespace App\Repository;

use App\Entity\AbsenceApprovers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AbsenceApprovers|null find($id, $lockMode = null, $lockVersion = null)
 * @method AbsenceApprovers|null findOneBy(array $criteria, array $orderBy = null)
 * @method AbsenceApprovers[]    findAll()
 * @method AbsenceApprovers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AbsenceApproversRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AbsenceApprovers::class);
    }

    // /**
    //  * @return AbsenceApprovers[] Returns an array of AbsenceApprovers objects
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
    public function findOneBySomeField($value): ?AbsenceApprovers
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
