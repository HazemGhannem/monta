<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     *
     */
    private $title;

    /**
     * @ORM\Column(type="string")
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=10000)
     * @Assert\NotBlank
     */
    private $contenu;

    /**
     * @ORM\Column(type="date")
     */
    private $creationDate;

    /**
     * @ORM\Column(type="float")
     * @Assert\NotBlank
     */
    private $rating;

    /**
     * @ORM\OneToMany(targetEntity=Opinion::class, mappedBy="article", orphanRemoval=true)
     */
    private $opinions;

    /**
     * @ORM\ManyToOne(targetEntity=Blogueur::class, inversedBy="articles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $blogueur;

    /**
     * @ORM\OneToMany(targetEntity=Like::class, mappedBy="article")
     */
    private $likes;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $pourcentageLike;

    public function __construct()
    {
        $this->opinions = new ArrayCollection();
        //  $this->creationDate = new \DateTime();
        $this->likes = new ArrayCollection();

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

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

    public function getRating(): ?float
    {
        return $this->rating;
    }

    public function setRating(float $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * @return Collection|Opinion[]
     */
    public function getOpinions(): Collection
    {
        return $this->opinions;
    }

    public function addOpinion(Opinion $opinion): self
    {
        if (!$this->opinions->contains($opinion)) {
            $this->opinions[] = $opinion;
            $opinion->setArticle($this);
        }

        return $this;
    }

    public function removeOpinion(Opinion $opinion): self
    {
        if ($this->opinions->removeElement($opinion)) {
            // set the owning side to null (unless already changed)
            if ($opinion->getArticle() === $this) {
                $opinion->setArticle(null);
            }
        }

        return $this;
    }

    public function getBlogueur(): ?Blogueur
    {
        return $this->blogueur;
    }

    public function setBlogueur(?Blogueur $blogueur): self
    {
        $this->blogueur = $blogueur;

        return $this;
    }
    public function __toString()
    {
        return $this->title;
    }

    /**
     * @return Collection|Like[]
     */
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    public function addLike(Like $like): self
    {
        if (!$this->likes->contains($like)) {
            $this->likes[] = $like;
            $like->setArticle($this);
        }

        return $this;
    }

    public function removeLike(Like $like): self
    {
        if ($this->likes->removeElement($like)) {
            // set the owning side to null (unless already changed)
            if ($like->getArticle() === $this) {
                $like->setArticle(null);
            }
        }

        return $this;
    }

    public function getPourcentageLike(): ?int
    {
        return $this->pourcentageLike;
    }

    public function setPourcentageLike(?int $pourcentageLike): self
    {
        $this->pourcentageLike = $pourcentageLike;

        return $this;
    }
}
