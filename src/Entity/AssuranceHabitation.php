<?php

namespace App\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\AssuranceHabitationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;





#[ORM\Entity(repositoryClass: AssuranceHabitationRepository::class)]
class AssuranceHabitation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("AssuranceHabitation")]
    private ?int $id = null;

    #[ORM\Column]
     /**
     * @Assert\NotBlank(message="nbPieceImmobilier  est obligatoire.")
     * @Assert\Range(
     *      min = 1,
     *      max = 20,
     *      notInRangeMessage = "nombre de piece doit  varie entre  {{ min }} et {{ max }}",
     * )
     */
    #[Groups("AssuranceHabitation")]
    private ?int $nbPieceImmobilier = null;


    #[ORM\Column]
     /**
     * @Assert\NotBlank(message="le champ capital est obligatoire.")
     * @Assert\Range(
     *      min = 10000,
     *      max = 1000000,
     *      notInRangeMessage = "capital immobilier doit  varie entre  {{ min }} et {{ max }}",
     * )
     */
    #[Groups("AssuranceHabitation")]
    private ?float $capitalImmobilier = null;


    #[ORM\Column]
    /**
     * @Assert\NotBlank(message="le champ capital est obligatoire.")
     * @Assert\Range(
     *      min = 10000,
     *      max = 1000000,
     *      notInRangeMessage = "capital immobilier doit  varie entre  {{ min }} et {{ max }}",
     * )
     */
    #[Groups("AssuranceHabitation")]
    private ?float $capitalMobilier = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"client id est obligatoire")]
    #[Groups("AssuranceHabitation")]
    private ?int $idClient = null;

    #[ORM\ManyToOne]
    private ?Categorie $type = null;

    #[ORM\Column(nullable: true)]
    #[Groups("AssuranceHabitation")]
    private ?float $devis = null;



    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbPieceImmobilier(): ?int
    {
        return $this->nbPieceImmobilier;
    }

    public function setNbPieceImmobilier(int $nbPieceImmobilier): self
    {
        $this->nbPieceImmobilier = $nbPieceImmobilier;

        return $this;
    }

    public function getCapitalImmobilier(): ?float
    {
        return $this->capitalImmobilier;
    }

    public function setCapitalImmobilier(float $capitalImmobilier): self
    {
        $this->capitalImmobilier = $capitalImmobilier;

        return $this;
    }

    public function getCapitalMobilier(): ?float
    {
        return $this->capitalMobilier;
    }

    public function setCapitalMobilier(float $capitalMobilier): self
    {
        $this->capitalMobilier = $capitalMobilier;

        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(int $idClient): self
    {
        $this->idClient = $idClient;
        return $this;
    }

    public function getType(): ?categorie
    {
        return $this->type;
    }

    public function setType(?categorie $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function __toString()
    {
        return $this->nom ;
    }

    public function getDevis(): ?float
    {
        return $this->devis;
    }

    public function setDevis(?float $devis): self
    {
        $this->devis = $devis;

        return $this;
    }

}
