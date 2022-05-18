<?php

namespace App\Entity;

use App\Repository\LikeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LikeRepository::class)
 * @ORM\Table(name="`like`")
 */
class Like
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $typeLike;

    /**
     * @ORM\ManyToOne(targetEntity=Article::class, inversedBy="likes")
     */
    private $article;

    /**
     * @ORM\ManyToOne(targetEntity=Blogueur::class, inversedBy="likes")
     */
    private $blogueur;

    public function __construct()
    {
        $this->blogueur = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeLike(): ?bool
    {
        return $this->typeLike;
    }

    public function setTypeLike(bool $typeLike): self
    {
        $this->typeLike = $typeLike;

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

    public function getBlogueur(): ?Blogueur
    {
        return $this->blogueur;
    }

    public function setBlogueur(?Blogueur $blogueur): self
    {
        $this->blogueur = $blogueur;

        return $this;
    }
}
