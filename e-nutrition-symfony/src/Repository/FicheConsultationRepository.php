<?php

namespace App\Repository;

use App\Entity\FicheConsultation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FicheConsultation|null find($id, $lockMode = null, $lockVersion = null)
 * @method FicheConsultation|null findOneBy(array $criteria, array $orderBy = null)
 * @method FicheConsultation[]    findAll()
 * @method FicheConsultation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FicheConsultationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FicheConsultation::class);
    }

    // /**
    //  * @return FicheConsultation[] Returns an array of FicheConsultation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FicheConsultation
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
