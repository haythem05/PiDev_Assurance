<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Twilio\Rest\Client;

/**
 * @extends ServiceEntityRepository<Reclamation>
 *
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    public function save(Reclamation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reclamation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function orderByNomASC()
    {
        return $this->createQueryBuilder('n')
            ->orderBy('n.nomD', 'ASC')
            ->getQuery()->getResult();
    }
    

public function sms($tel){
    // Your Account SID and Auth Token from twilio.com/console
    $sid = 'ACff84933d8ba60e09a568cccd1ed8fd14';
    $auth_token = 'c7a30a539216a1277f4665f738d45bb0';
    // In production, these should be environment variables. E.g.:
    // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]
    // A Twilio number you own with SMS capabilities
    $twilio_number = "+12763294372";

    $client = new Client($sid, $auth_token);
    $client->messages->create(
        // the number you'd like to send the message to
        $tel,
        [
            // A Twilio phone number you purchased at twilio.com/console
            'from' => '+12763294372',
            // the body of the text message you'd like to send
            'body' => 'Votre réclamation est reçue avec succès et sera traitée dans une heure. Merci!'
        ]
    );
}

}
