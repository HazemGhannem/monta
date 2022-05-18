<?php

namespace App\Entity;

use App\Repository\VolRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VolRepository::class)
 */
class Vol
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
    private $date;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $villedep;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $villear;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
    {
        $this->prix = $prix;

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

    public function getVillear(): ?string
    {
        return $this->villear;
    }

    public function setVillear(string $villear): self
    {
        $this->villear = $villear;

        return $this;
    }
}
