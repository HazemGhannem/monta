<?php

namespace App\Entity;

use App\Repository\ReclammationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups ;

/**
 * @ORM\Entity(repositoryClass=ReclammationRepository::class)
 */
class Reclammation
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
    private $objet;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Message requis")
     * @Assert\Length(
     *     min=10,
     *     max=200,
     *     minMessage = "Le message doit contenir {{ limit }} lettres",
     *     maxMessage = "Le message doit contenir {{ limit }} lettres")
     * @Groups("post:read")

     */
    private $message;



    /**
     * @ORM\Column(type="integer")
     * @Groups("post:read")
     */
    private $client_id;


    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("post:read")

     */
    private $statut;

    /**
     * @ORM\OneToOne(targetEntity=Reponse::class, mappedBy="reclamation", cascade={"persist", "remove"})
     */
    private $reponse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }




    public function getClientId(): ?int
    {
        return $this->client_id;
    }

    public function setClientId(int $client_id): self
    {
        $this->client_id = $client_id;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getReponse(): ?Reponse
    {
        return $this->reponse;
    }

    public function setReponse(?Reponse $reponse): self
    {
        $this->reponse = $reponse;

        return $this;
    }
}
