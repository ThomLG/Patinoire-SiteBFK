<?php

namespace App\Entity;

use App\Repository\FootballMatchRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FootballMatchRepository::class)
 */
class FootballMatch
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $footballMatchDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $footballMatchLocation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $result;

    /**
     * @ORM\ManyToOne(targetEntity=BfkTeam::class)
     */
    private $BfkTeam;

    /**
     * @ORM\ManyToOne(targetEntity=BfkTeamOpponent::class)
     */
    private $BfkTeamOpponent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFootballMatchDate(): ?\DateTimeInterface
    {
        return $this->footballMatchDate;
    }

    public function setFootballMatchDate(?\DateTimeInterface $footballMatchDate): self
    {
        $this->footballMatchDate = $footballMatchDate;

        return $this;
    }

    public function getFootballMatchLocation(): ?string
    {
        return $this->footballMatchLocation;
    }

    public function setFootballMatchLocation(?string $footballMatchLocation): self
    {
        $this->footballMatchLocation = $footballMatchLocation;

        return $this;
    }

    public function getResult(): ?string
    {
        return $this->result;
    }

    public function setResult(?string $result): self
    {
        $this->result = $result;

        return $this;
    }

    public function getBfkTeam(): ?BfkTeam
    {
        return $this->BfkTeam;
    }

    public function setBfkTeam(?BfkTeam $BfkTeam): self
    {
        $this->BfkTeam = $BfkTeam;

        return $this;
    }

    public function getBfkTeamOpponent(): ?BfkTeamOpponent
    {
        return $this->BfkTeamOpponent;
    }

    public function setBfkTeamOpponent(?BfkTeamOpponent $BfkTeamOpponent): self
    {
        $this->BfkTeamOpponent = $BfkTeamOpponent;

        return $this;
    }
}
