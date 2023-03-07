<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Length;
use App\Repository\CompteComptableRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompteComptableRepository::class)]
class CompteComptable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Veuillez entrer un numéro de compte.")]
    #[Length(min: 8,minMessage: "Le numéro de compte doit comporter au moins {{ limit }} chiffres.")]
    #[Assert\Positive(message: "Veuillez entrer un nombre positive.")]
    #[Groups("comptecomptable")]
    private ?int $numeroCompte = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Veuillez entrer un nom de compte.")]
    #[Assert\Regex(pattern: '/^[^0-9]*$/',message: 'Le nom de compte ne doit pas contenir de chiffres.')]
    #[Length(min: 8,minMessage: "Le nom de compte doit comporter au moins {{ limit }} caractères.")]
    #[Groups("comptecomptable")]
    private ?string $nomCompte = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Veuillez entrer le solde de compte.")]
    #[Groups("comptecomptable")]
    private ?float $soldeCompte = null;

    #[ORM\ManyToOne]
    #[Assert\NotBlank(message: "Veuillez choisir un code pour le compte.")]
    private ?SousClasse $codeCompte = null;

    #[ORM\Column(length: 255)]
    #[Groups("comptecomptable")]
    private ?string $typeCompte = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroCompte(): ?int
    {
        return $this->numeroCompte;
    }

    public function setNumeroCompte(int $numeroCompte): self
    {
        $this->numeroCompte = $numeroCompte;

        return $this;
    }

    public function getNomCompte(): ?string
    {
        return $this->nomCompte;
    }

    public function setNomCompte(string $nomCompte): self
    {
        $this->nomCompte = $nomCompte;

        return $this;
    }

    public function getSoldeCompte(): ?float
    {
        return $this->soldeCompte;
    }

    public function setSoldeCompte(float $soldeCompte): self
    {
        $this->soldeCompte = $soldeCompte;

        return $this;
    }

    public function getCodeCompte(): ?SousClasse
    {
        return $this->codeCompte;
    }

    public function setCodeCompte(?SousClasse $codeCompte): self
    {
        $this->codeCompte = $codeCompte;

        return $this;
    }

    public function getTypeCompte(): ?string
    {
        return $this->typeCompte;
    }

    public function setTypeCompte(string $typeCompte): self
    {
        $this->typeCompte = $typeCompte;

        return $this;
    }
}
