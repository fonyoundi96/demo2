<?php

namespace App\Repository;

use App\Entity\RecommandationUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RecommandationUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method RecommandationUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method RecommandationUser[]    findAll()
 * @method RecommandationUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecommandationUserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RecommandationUser::class);
    }

    // /**
    //  * @return RecommandationUser[] Returns an array of RecommandationUser objects
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
    public function findOneBySomeField($value): ?RecommandationUser
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
