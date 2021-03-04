<?php

namespace App\Entity;

use App\Repository\MedicamentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MedicamentRepository::class)
 */
class Medicament
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dur�e;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $quantit�;

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

    public function getDur�e(): ?string
    {
        return $this->dur�e;
    }

    public function setDur�e(string $dur�e): self
    {
        $this->dur�e = $dur�e;

        return $this;
    }

    public function getQuantit�(): ?string
    {
        return $this->quantit�;
    }

    public function setQuantit�(string $quantit�): self
    {
        $this->quantit� = $quantit�;

        return $this;
    }
}
