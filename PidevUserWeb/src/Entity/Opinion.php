<?php

namespace App\Entity;

use App\Repository\OpinionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=OpinionRepository::class)
 */
class Opinion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=1000)
     * @Assert\NotBlank
     */
    private $commentaire;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank
     * @Assert\Expression("this.getRating()<5 && this.getRating()>0 ")
     */
    private $rating;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank
     */
    private $creationDate;

    /**
     * @ORM\ManyToOne(targetEntity=Article::class, inversedBy="opinions")
     * @ORM\JoinColumn(nullable=false)
     *
     */
    private $article;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="opinions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\OneToMany(targetEntity=Signalement::class, mappedBy="opinion")
     */
    private $signalements;

    public function __construct()
    {
        $this->creationDate = new \DateTime();
        $this->signalements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getRating(): ?float
    {
        return $this->rating;
    }

    public function setRating(float $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate=new \DateTime();
    }

    public function setCreationDate(\DateTimeInterface $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }
    public function __toString()
    {
        return $this->id;
    }

    /**
     * @return Collection|Signalement[]
     */
    public function getSignalements(): Collection
    {
        return $this->signalements;
    }

    public function addSignalement(Signalement $signalement): self
    {
        if (!$this->signalements->contains($signalement)) {
            $this->signalements[] = $signalement;
            $signalement->setOpinion($this);
        }

        return $this;
    }

    public function removeSignalement(Signalement $signalement): self
    {
        if ($this->signalements->removeElement($signalement)) {
            // set the owning side to null (unless already changed)
            if ($signalement->getOpinion() === $this) {
                $signalement->setOpinion(null);
            }
        }

        return $this;
    }
}
