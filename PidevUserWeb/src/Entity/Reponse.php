<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups ;

/**
 * @ORM\Entity(repositoryClass=ReponseRepository::class)
 */
class Reponse
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
    private $repmessage;

    /**
     * @ORM\OneToOne(targetEntity=Reclammation::class, inversedBy="reponse", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Groups("post:read")
     */
    private $reclamation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRepmessage(): ?string
    {
        return $this->repmessage;
    }

    public function setRepmessage(string $repmessage): self
    {
        $this->repmessage = $repmessage;

        return $this;
    }

    public function getReclamation(): ?Reclammation
    {
        return $this->reclamation;
    }

    public function setReclamation(Reclammation $reclamation): self
    {
        $this->reclamation = $reclamation;

        return $this;
    }
}
