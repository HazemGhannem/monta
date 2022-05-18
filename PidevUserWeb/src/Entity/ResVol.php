<?php

namespace App\Entity;

use App\Repository\ResVolRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ResVolRepository::class)
 */
class ResVol
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $datevoll;

    /**
     * @ORM\Column(type="float")
     */
    private $prixvol;

    /**
     * @ORM\ManyToOne(targetEntity=Volll::class)
     */
    private $destination;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villedep;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $villearr;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatevoll(): ?\DateTimeInterface
    {
        return $this->datevoll;
    }

    public function setDatevoll(\DateTimeInterface $datevoll): self
    {
        $this->datevoll = $datevoll;

        return $this;
    }

    public function getPrixvol(): ?float
    {
        return $this->prixvol;
    }

    public function setPrixvol(float $prixvol): self
    {
        $this->prixvol = $prixvol;

        return $this;
    }

    public function getDestination(): ?Volll
    {
        return $this->destination;
    }

    public function setDestination(?Volll $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getVilledep(): ?string
    {
        return $this->villedep;
    }

    public function setVilledep(string $villedep): self
    {
        $this->villedep = $villedep;

        return $this;
    }

    public function getVillearr(): ?string
    {
        return $this->villearr;
    }

    public function setVillearr(string $villearr): self
    {
        $this->villearr = $villearr;

        return $this;
    }
}
