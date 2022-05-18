<?php

namespace App\Entity;

use App\Repository\VolllRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=VolllRepository::class)
 */
class Volll
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
    private $datevolll;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank(message="Prix is required")
     */
    private $prixvolll;

    /**
     * @ORM\ManyToOne(targetEntity=Destination::class, inversedBy="Volll")
     */
    private $destination;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="vols", cascade={"all"},orphanRemoval=true)
     */
    private $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getDatevolll(): ?\DateTimeInterface
    {
        return $this->datevolll;
    }

    public function setDatevolll(\DateTimeInterface $datevolll): self
    {
        $this->datevolll = $datevolll;

        return $this;
    }

    public function getPrixvolll(): ?float
    {
        return $this->prixvolll;
    }

    public function setPrixvolll(float $prixvolll): self
    {
        $this->prixvolll = $prixvolll;

        return $this;
    }

    public function getDestination(): ?Destination
    {
        return $this->destination;
    }

    public function setDestination(?Destination $destination): self
    {
        $this->destination= $destination;

        return $this;
    }

    /**
     * @return Collection|Reservation[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setVols($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getVols() === $this) {
                $reservation->setVols(null);
            }
        }

        return $this;
    }







}
