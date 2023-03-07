<?php

namespace App\Entity;

use App\Repository\SousClasseRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SousClasseRepository::class)]
class SousClasse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Groups("sousclasse")]
    private ?int $codeSousClasse = null;

    #[ORM\Column(length: 255)]
    #[Groups("sousclasse")]
    private ?string $nomSousClasse = null;

    #[ORM\ManyToOne]
    private ?Classe $classeSousClasse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeSousClasse(): ?int
    {
        return $this->codeSousClasse;
    }

    public function setCodeSousClasse(int $codeSousClasse): self
    {
        $this->codeSousClasse = $codeSousClasse;

        return $this;
    }

    public function getNomSousClasse(): ?string
    {
        return $this->nomSousClasse;
    }

    public function setNomSousClasse(string $nomSousClasse): self
    {
        $this->nomSousClasse = $nomSousClasse;

        return $this;
    }

    public function getClasseSousClasse(): ?Classe
    {
        return $this->classeSousClasse;
    }

    public function setClasseSousClasse(?Classe $classeSousClasse): self
    {
        $this->classeSousClasse = $classeSousClasse;

        return $this;
    }
    public function __toString(): string
    {
        return $this->codeSousClasse;
    }
}
