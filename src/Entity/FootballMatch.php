<?php

namespace App\Entity;

use App\Repository\FootballMatchRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\OneToMany(targetEntity=MatchConvocation::class, mappedBy="matchConvocation")
     */
    private $matchConvocations;


    public function __construct()
    {
        $this->matchConvocations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFootballMatchDate(): ?\DateTimeInterface
    {
        return $this->footballMatchDate;
    }

    public function getFootballMatchDateToString():string //obtenir la date en mode string
    {
        return $this->getFootballMatchDate()->format("d-m-Y");
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

    public function __toString():string
    {
        return $this->getFootballMatchDateToString()."-".$this->getBfkTeam()." - ".$this->getBfkTeamOpponent();
    }

    public function matchTeams():string
    {
        return $this->getFootballMatchDate()." - ".$this->getBfkTeam()." ".$this->getBfkTeamOpponent();
    }

    /**
     * @return Collection|MatchConvocation[]
     */
    public function getMatchConvocations(): Collection
    {
        return $this->matchConvocations;
    }

    public function addMatchConvocation(MatchConvocation $matchConvocation): self
    {
        if (!$this->matchConvocations->contains($matchConvocation)) {
            $this->matchConvocations[] = $matchConvocation;
            $matchConvocation->setMatchConvocation($this);
        }

        return $this;
    }

    public function removeMatchConvocation(MatchConvocation $matchConvocation): self
    {
        if ($this->matchConvocations->removeElement($matchConvocation)) {
            // set the owning side to null (unless already changed)
            if ($matchConvocation->getMatchConvocation() === $this) {
                $matchConvocation->setMatchConvocation(null);
            }
        }

        return $this;
    }
}
