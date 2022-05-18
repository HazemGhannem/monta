<?php

namespace App\Entity;

use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=EventRepository::class)
 */
class Event
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
     * @Groups("post:read")
     */
    private $nomEvent;

    /**
     * @ORM\Column(type="date")
     * @Groups("post:read")
     */
    private $dateEvent;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")
     */
    private $image;

    /**
     * @ORM\OneToMany(targetEntity=Promotion::class, mappedBy="event")
     */
    private $promo;

    public function __construct()
    {
        $this->promo = new ArrayCollection();
        $this->dateEvent = new \DateTime('now');
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEvent(): ?string
    {
        return $this->nomEvent;
    }

    public function setNomEvent(string $nomEvent): self
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }

    public function getDateEvent(): ?\DateTimeInterface
    {
        return $this->dateEvent;
    }

    public function setDateEvent(\DateTimeInterface $dateEvent): self
    {
        $this->dateEvent = $dateEvent;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return Collection|Promotion[]
     */
    public function getPromo(): Collection
    {
        return $this->promo;
    }

    public function addPromo(Promotion $promo): self
    {
        if (!$this->promo->contains($promo)) {
            $this->promo[] = $promo;
            $promo->setEvent($this);
        }

        return $this;
    }

    public function removePromo(Promotion $promo): self
    {
        if ($this->promo->removeElement($promo)) {
            // set the owning side to null (unless already changed)
            if ($promo->getEvent() === $this) {
                $promo->setEvent(null);
            }
        }

        return $this;
    }
    public function __toString(){
        // to show the name of the Category in the select
        //return $this->id;
        return ($this->getNomEvent());

    }
}
