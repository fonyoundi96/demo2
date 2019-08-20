<?php

namespace App\Repository;

use App\Entity\RecommandationArticle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RecommandationArticle|null find($id, $lockMode = null, $lockVersion = null)
 * @method RecommandationArticle|null findOneBy(array $criteria, array $orderBy = null)
 * @method RecommandationArticle[]    findAll()
 * @method RecommandationArticle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecommandationArticleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RecommandationArticle::class);
    }

    // /**
    //  * @return RecommandationArticle[] Returns an array of RecommandationArticle objects
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
    public function findOneBySomeField($value): ?RecommandationArticle
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
