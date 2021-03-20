<?php

namespace App\Entity;

use App\Repository\NoveltyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NoveltyRepository::class)
 */
class Novelty
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
    private $noveltyTitle;

    /**
     * @ORM\Column(type="text")
     */
    private $noveltyContent;

    /**
     * @ORM\Column(type="datetime")
     */
    private $noveltyDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNoveltyTitle(): ?string
    {
        return $this->noveltyTitle;
    }

    public function setNoveltyTitle(string $noveltyTitle): self
    {
        $this->noveltyTitle = $noveltyTitle;

        return $this;
    }

    public function getNoveltyContent(): ?string
    {
        return $this->noveltyContent;
    }

    public function setNoveltyContent(string $noveltyContent): self
    {
        $this->noveltyContent = $noveltyContent;

        return $this;
    }

    public function getNoveltyDate(): ?\DateTimeInterface
    {
        return $this->noveltyDate;
    }

    public function setNoveltyDate(\DateTimeInterface $noveltyDate): self
    {
        $this->noveltyDate = $noveltyDate;

        return $this;
    }
}
