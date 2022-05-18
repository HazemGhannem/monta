<?php

namespace App\Entity;

use App\Repository\HotelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups ;

/**
 * @ORM\Entity(repositoryClass=HotelRepository::class)
 */
class Hotel
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
     * @Assert\NotBlank(message="Nom ville is required")
     * @Groups("post:read")
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Nom Hotel is required")
     * @Groups("post:read")
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="nombres de chambres is required")
     * @Groups("post:read")
     */
    private $nbChambre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Image du Hotel is required")
     * @Groups("post:read")
     */
    private $imghotel;


    /**
     * @ORM\OneToMany(targetEntity=Chambre::class, mappedBy="hotel",orphanRemoval=true)
     *
     */
    private $relation;

    public function __construct()
    {
        $this->relation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getImghotel(): ?string
    {
        return $this->imghotel;
    }

    public function setImghotel(string $imghotel): self
    {
        $this->imghotel = $imghotel;

        return $this;
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

    public function getNbChambre(): ?int
    {
        return $this->nbChambre;
    }

    public function setNbChambre(int $nbChambre): self
    {
        $this->nbChambre = $nbChambre;

        return $this;
    }

    /**
     * @return Collection|Chambre[]
     */
    public function getRelation(): Collection
    {
        return $this->relation;
    }

    public function addRelation(Chambre $relation): self
    {
        if (!$this->relation->contains($relation)) {
            $this->relation[] = $relation;
            $relation->setHotel($this);
        }

        return $this;
    }

    public function removeRelation(Chambre $relation): self
    {
        if ($this->relation->removeElement($relation)) {
            // set the owning side to null (unless already changed)
            if ($relation->getHotel() === $this) {
                $relation->setHotel(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return $this->getNom();
    }



}
