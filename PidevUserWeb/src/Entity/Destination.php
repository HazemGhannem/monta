<?php

namespace App\Entity;

use App\Repository\DestinationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=DestinationRepository::class)
 */
class Destination
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ville is required")
     */
    private $ville_dep;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ville is required")
     */
    private $ville_arr;

    /**
     * @ORM\OneToMany(targetEntity=Volll::class, mappedBy="destination",cascade={"all"} ,orphanRemoval=true)
     */
    private $Volll;


    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }


    public function getVilleArr(): ?string
    {
        return $this->ville_arr;
    }

    public function setVilleArr(string $ville_arr): self
    {
        $this->ville_arr = $ville_arr;

        return $this;
    }
    public function getVilleDep(): ?string
    {
        return $this->ville_dep;
    }

    public function setVilleDep(string $ville_dep): self
    {
        $this->ville_dep = $ville_dep;

        return $this;
    }

    public function getVolll(): ?Volll
    {
        return $this->Volll;
    }

    public function setVolll(?Volll $Volll): self
    {
        $this->Volll = $Volll;

        return $this;
    }

}
