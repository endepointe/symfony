<?php

namespace App\Repository;

use App\Entity\UserKey;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UserKey|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserKey|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserKey[]    findAll()
 * @method UserKey[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserKeyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UserKey::class);
    }

    // /**
    //  * @return UserKey[] Returns an array of UserKey objects
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
    public function findOneBySomeField($value): ?UserKey
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
