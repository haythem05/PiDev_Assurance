<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\MouvementRepository;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MouvementRepository::class)]
class Mouvement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Veuillez entrer la référence du mouvement.")]
    #[Assert\Regex(pattern: '/^FAC N°/',message: 'La référence doit commencer avec : FAC N°')]
    #[Groups("mouvement")]
    private ?string $referenceMouvement = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "Veuillez entrer la date du mouvement.")]
    #[Assert\GreaterThanOrEqual("today - 3 days", message: "La date du mouvement ne peut pas être inférieure à {{ compared_value }}.")]
    #[Assert\LessThanOrEqual("today", message: "La date du mouvement ne peut pas être supérieure à {{ compared_value }}.")]
    #[Groups("mouvement")]
    private ?\DateTimeInterface $dateMouvement = null;

    #[ORM\ManyToOne]
    #[Assert\NotBlank(message: "Veuillez entrer le compte débité du mouvement.")]
    private ?CompteComptable $compteDebit = null;

    #[ORM\ManyToOne]
    #[Assert\NotBlank(message: "Veuillez entrer le compte crédité du mouvement.")]
    private ?CompteComptable $compteCredit = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Veuillez entrer le montant du mouvement.")]
    #[Assert\Positive(message: "Veuillez entrer un montant positive.")]
    #[Groups("mouvement")]
    private ?float $montantMouvement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReferenceMouvement(): ?string
    {
        return $this->referenceMouvement;
    }

    public function setReferenceMouvement(string $referenceMouvement): self
    {
        $this->referenceMouvement = $referenceMouvement;

        return $this;
    }

    public function getDateMouvement(): ?\DateTimeInterface
    {
        return $this->dateMouvement;
    }

    public function setDateMouvement(\DateTimeInterface $dateMouvement): self
    {
        $this->dateMouvement = $dateMouvement;

        return $this;
    }

    public function getCompteDebit(): ?CompteComptable
    {
        return $this->compteDebit;
    }

    public function setCompteDebit(?CompteComptable $compteDebit): self
    {
        $this->compteDebit = $compteDebit;

        return $this;
    }

    public function getCompteCredit(): ?CompteComptable
    {
        return $this->compteCredit;
    }

    public function setCompteCredit(?CompteComptable $compteCredit): self
    {
        $this->compteCredit = $compteCredit;

        return $this;
    }

    public function getMontantMouvement(): ?float
    {
        return $this->montantMouvement;
    }

    public function setMontantMouvement(float $montantMouvement): self
    {
        $this->montantMouvement = $montantMouvement;

        return $this;
    }
    public function __toString(){
        return $this->dateMouvement;
    }
}
