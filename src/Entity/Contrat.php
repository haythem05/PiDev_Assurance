<?php

namespace App\Entity;
use App\Repository\ContratRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContratRepository::class)]
class Contrat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"id Client est obligatoire")]
    private ?int $idClient = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\GreaterThanOrEqual("today", message: "La date début doit être égale ou supérieure à aujourd'hui.")]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\GreaterThan(propertyPath: "dateDebut", message: "La date de fin doit être supérieure à la date de début.")]
    #[Assert\LessThanOrEqual("+1 year", message: "La date de fin doit être inférieure ou égale à un an à partir de la date d'aujourd'hui.")]
    #[Assert\GreaterThanOrEqual("today", message: "La date de fin ne peut pas être antérieure à la date d'aujourd'hui.")]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message:"le champ avantages est obligatoire")]
    private string $avantages;

 /**
     * @Assert\NotBlank(message="le champ point est obligatoire.")
     * @Assert\Range(
     *      min = 0,
     *      max = 30,
     *      notInRangeMessage = "Point  varie entre  {{ min }} et {{ max }}",
     * )
     */
    private $points;


    #[ORM\ManyToOne]
    private ?Categorie $type = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;
        return $this;
    }

    public function getAvantages(): string
    {
        return $this->avantages;
    }

    public function setAvantages(string $avantages): self
    {
        $this->avantages = $avantages;

        return $this;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): self
    {
        $this->points = $points;

        return $this;
    }

    public function getType(): ?Categorie
    {
        return $this->type;
    }

    public function setType(?Categorie $type): self
    {
        $this->type = $type;

        return $this;
    }
}
