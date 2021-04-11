<?php

namespace App\Entity;

use App\Repository\MatchConvocationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MatchConvocationRepository::class)
 */
class MatchConvocation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=FootballMatch::class, inversedBy="matchConvocations")
     */
    private $matchConvocation;

    /**
     * @ORM\ManyToMany(targetEntity=Player::class, inversedBy="matchConvocations")
     */
    private $playerConvocation;

    public function __construct()
    {
        $this->playerConvocation = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatchConvocation(): ?FootballMatch
    {
        return $this->matchConvocation;
    }

    public function setMatchConvocation(?FootballMatch $matchConvocation): self
    {
        $this->matchConvocation = $matchConvocation;

        return $this;
    }

    /**
     * @return Collection|Player[]
     */
    public function getPlayerConvocation(): Collection
    {
        return $this->playerConvocation;
    }

    public function addPlayerConvocation(Player $playerConvocation): self
    {
        if (!$this->playerConvocation->contains($playerConvocation)) {
            $this->playerConvocation[] = $playerConvocation;
        }

        return $this;
    }

    public function removePlayerConvocation(Player $playerConvocation): self
    {
        $this->playerConvocation->removeElement($playerConvocation);

        return $this;
    }

}
