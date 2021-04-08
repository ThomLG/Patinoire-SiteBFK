<?php

namespace App\Entity;

use App\Repository\HistoryClubRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HistoryClubRepository::class)
 */
class HistoryClub
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $HistoryClubText;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $historyClubPicture;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHistoryClubText(): ?string
    {
        return $this->HistoryClubText;
    }

    public function setHistoryClubText(?string $HistoryClubText): self
    {
        $this->HistoryClubText = $HistoryClubText;

        return $this;
    }

    public function getHistoryClubPicture(): ?string
    {
        return $this->historyClubPicture;
    }

    public function setHistoryClubPicture(?string $historyClubPicture): self
    {
        $this->historyClubPicture = $historyClubPicture;

        return $this;
    }
}
