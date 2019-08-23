<?php

namespace App\Repository;

use App\Entity\RecommandationCathegorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RecommandationCathegorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method RecommandationCathegorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method RecommandationCathegorie[]    findAll()
 * @method RecommandationCathegorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecommandationCathegorieRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RecommandationCathegorie::class);
    }

    // /**
    //  * @return RecommandationCathegorie[] Returns an array of RecommandationCathegorie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RecommandationCathegorie
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
