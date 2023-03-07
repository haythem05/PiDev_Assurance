<?php

namespace App\Repository;

use App\Entity\Contrat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Contrat>
 *
 * @method Contrat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contrat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contrat[]    findAll()
 * @method Contrat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContratRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contrat::class);
    }

    public function save(Contrat $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Contrat $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function searchByMarque($query)
{
    return $this->createQueryBuilder('c')
        ->andWhere('c.marque LIKE :query')
        ->setParameter('query', '%'.$query.'%')
        ->orderBy('c.marque', 'ASC')
        ->getQuery()
        ->getResult();
}
    
public function searchContrat($marque = null, $prixMin = null, $prixMax = null)
    {

        $queryBuilder = $this->createQueryBuilder('p')
            ->select('p')
            ->orderBy('p.id', 'DESC');

        if ($marque) {
            $queryBuilder->andWhere('p.marque LIKE :marque')
                ->setParameter('marque', '%' . $marque . '%');
        }

        if ($prixMin) {
            $queryBuilder->andWhere('p.prix >= :prix_min')
                ->setParameter('prix_min', $prixMin);
        }

        if ($prixMax) {
            $queryBuilder->andWhere('p.prix <= :prix_max')
                ->setParameter('prix_max', $prixMax);
        }

        $query = $queryBuilder->getQuery();
        $results = $query->getResult();

        return $results;
    } 

//    /**
//     * @return Contrat[] Returns an array of Contrat objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Contrat
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
