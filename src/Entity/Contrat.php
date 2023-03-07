<?php

namespace App\Entity;
use App\Repository\ContratRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;


#[ORM\Entity(repositoryClass: ContratRepository::class)]
class Contrat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("contrat")]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank(message:"id Client est obligatoire")]
    #[Groups("contrat")]
    private ?int $idClient = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\GreaterThanOrEqual("today", message: "La date début doit être égale ou supérieure à aujourd'hui.")]
    #[Groups("contrat")]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\GreaterThan(propertyPath: "dateDebut", message: "La date de fin doit être supérieure à la date de début.")]
    #[Assert\LessThanOrEqual("+1 year", message: "La date de fin doit être inférieure ou égale à un an à partir de la date d'aujourd'hui.")]
    #[Assert\GreaterThanOrEqual("today", message: "La date de fin ne peut pas être antérieure à la date d'aujourd'hui.")]
    #[Groups("contrat")]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message:"le champ avantages est obligatoire")]
    #[Groups("contrat")]
    private string $avantages;



    #[ORM\ManyToOne]
    private ?Categorie $type = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Marque est obligatoire")]
    #[Groups("contrat")]
    private ?string $marque = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"Modele est obligatoire")]
    #[Groups("contrat")]
    private ?string $modele = null;
 /**
     * @Assert\NotBlank(message="le champ nombre de place  est obligatoire.")
     * @Assert\Range(
     *      min = 2,
     *      max = 8,
     *      notInRangeMessage = "nombre de place  varie entre  {{ min }} et {{ max }}",
     * )
     */
    #[ORM\Column]
    #[Groups("contrat")]
    private ?int $nbPlace = null;

  /**
     * @Assert\LessThanOrEqual("today",message="la date de mis en circulation doit etre inferieur ou egale a la date d'aujourdhui")
     */
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Groups("contrat")]
    private ?\DateTimeInterface $DateCirculation = null;
/**
     * @Assert\NotBlank(message="le champ  valeur catalogue  est obligatoire.")
     * @Assert\Range(
     *      min = 15000,
     *      max = 500000000,
     *      notInRangeMessage = " prix de catalogue doit etre entre   {{ min }} et {{ max }}",
     * )
     */
    
    #[ORM\Column]
    #[Groups("contrat")]
    private ?float $valeurCatalogue = null;

    #[ORM\Column(nullable: true)]
    #[Groups("contrat")]
    private ?float $prix = null;



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

 
    public function getType(): ?Categorie
    {
        return $this->type;
    }

    public function setType(?Categorie $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getNbPlace(): ?int
    {
        return $this->nbPlace;
    }

    public function setNbPlace(int $nbPlace): self
    {
        $this->nbPlace = $nbPlace;

        return $this;
    }

    public function getDateCirculation(): ?\DateTimeInterface
    {
        return $this->DateCirculation;
    }

    public function setDateCirculation(\DateTimeInterface $DateCirculation): self
    {
        $this->DateCirculation = $DateCirculation;

        return $this;
    }

    public function getValeurCatalogue(): ?float
    {
        return $this->valeurCatalogue;
    }

    public function setValeurCatalogue(float $valeurCatalogue): self
    {
        $this->valeurCatalogue = $valeurCatalogue;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

 
}
