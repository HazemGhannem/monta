<?php

namespace App\Repository;

use App\Entity\Reclammation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reclammation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclammation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclammation[]    findAll()
 * @method Reclammation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclammationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclammation::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Reclammation $entity, bool $flush = true): void
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
    public function remove(Reclammation $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }
    public function tristatutDESC()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT e FROM App:Reclammation e ORDER BY e.statut ASC'
            )
            ->getResult();

    }
    // /**
    //  * @return Reclammation[] Returns an array of Reclammation objects
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
    public function findOneBySomeField($value): ?Reclammation
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
