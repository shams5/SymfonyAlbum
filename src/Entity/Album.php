<?php

namespace App\Entity;

use App\Repository\AlbumRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AlbumRepository::class)
 */
class Album
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $subject;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $imgPrix;

    /**
     * @ORM\Column(type="text")
     */
    private $imgUrl;

    /**
     * @ORM\Column(type="date")
     */
    private $creationeDate;

    public function __construct()
    {
        $this->creationeDate = new \DateTime("now");
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getImgPrix(): ?int
    {
        return $this->imgPrix;
    }

    public function setImgPrix(?int $imgPrix): self
    {
        $this->imgPrix = $imgPrix;

        return $this;
    }

    public function getImgUrl(): ?string
    {
        return $this->imgUrl;
    }

    public function setImgUrl(string $imgUrl): self
    {
        $this->imgUrl = $imgUrl;

        return $this;
    }

    public function getCreationeDate(): ?\DateTimeInterface
    {
        return $this->creationeDate;
    }

    public function setCreationeDate(\DateTimeInterface $creationeDate): self
    {
        $this->creationeDate = $creationeDate;

        return $this;
    }
}
