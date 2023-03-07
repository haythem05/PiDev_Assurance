<?php

namespace App\Entity;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\CategorieRepository;
use Symfony\Component\Serializer\Annotation\Groups;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("categorie")]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    #[Assert\Regex(pattern: '/^[^0-9]*$/',message: 'Le nom de compte ne doit pas contenir de chiffres.')]
    #[Groups("categorie")]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Groups("categorie")]
    private ?string $categorieImage = null;

    #[Assert\NotBlank(message:"Description est obligatoire")]
    #[ORM\Column(type: Types::TEXT)]
    #[Groups("categorie")]
    private ?string $description = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    
    public function __toString()
{
    return $this->nom ;
}


    public function getCategorieImage(): ?string
    {
        return $this->categorieImage;
    }

    public function setCategorieImage(?string $categorieImage): self
    {
        $this->categorieImage = $categorieImage;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}

 