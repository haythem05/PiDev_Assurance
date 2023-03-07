<?php

namespace App\Entity;

use App\Repository\ClasseRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClasseRepository::class)]
class Classe
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[Groups(["classe"])]
    private ?int $idClasse = null;

    #[ORM\Column(length: 255)]
    #[Groups(["classe"])]
    private ?string $nomClasse = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdClasse(): ?int
    {
        return $this->idClasse;
    }

    public function setIdClasse(int $idClasse): self
    {
        $this->idClasse = $idClasse;

        return $this;
    }

    public function getNomClasse(): ?string
    {
        return $this->nomClasse;
    }

    public function setNomClasse(string $nomClasse): self
    {
        $this->nomClasse = $nomClasse;

        return $this;
    }
    public function __toString(): string
    {
        return $this->nomClasse;
    }
}
