<?php

namespace App\Repository;

use App\Entity\Volll;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Volll|null find($id, $lockMode = null, $lockVersion = null)
 * @method Volll|null findOneBy(array $criteria, array $orderBy = null)
 * @method Volll[]    findAll()
 * @method Volll[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VolllRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Volll::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Volll $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Volll $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Volll[] Returns an array of Volll objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Volll
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function findStartingWith($recherche)
    {
        return $this->createQueryBuilder('c')
            ->select('e')
            ->from('App\Entity\Destination', 'e')
            ->where('e.ville_dep LIKE :val')
            ->setParameter("val", $recherche . '%')
            ->getQuery()
            ->getResult();
    }
}
