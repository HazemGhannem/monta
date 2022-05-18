<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
/**
 * @ORM\Entity(repositoryClass=ChambreRepository::class)
 */
class Chambre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Type Chambre is required")
     * @Groups("post:read")
     */
    private $Type;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="nombre de lits is required")
     * @Groups("post:read")
     */
    private $nbLits;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="etage is required")
     * @Groups("post:read")
     */
    private $etage;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="prix chambre is required")
     * @Groups("post:read")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="vue is required")
     * @Groups("post:read")
     */
    private $vue;

    /**
     * @ORM\ManyToOne(targetEntity=Hotel::class, inversedBy="relation")
     * @Groups("post:read")
     */
    private $hotel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getNbLits(): ?int
    {
        return $this->nbLits;
    }

    public function setNbLits(int $nbLits): self
    {
        $this->nbLits = $nbLits;

        return $this;
    }

    public function getEtage(): ?string
    {
        return $this->etage;
    }

    public function setEtage(string $etage): self
    {
        $this->etage = $etage;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getVue(): ?string
    {
        return $this->vue;
    }

    public function setVue(string $vue): self
    {
        $this->vue = $vue;

        return $this;
    }

    public function getHotel(): ?Hotel
    {
        return $this->hotel;
    }

    public function setHotel(?Hotel $hotel): self
    {
        $this->hotel = $hotel;

        return $this;
    }
  
}
