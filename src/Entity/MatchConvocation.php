<?php

namespace App\Entity;

use App\Repository\MatchConvocationRepository;
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
     * @ORM\ManyToOne(targetEntity=Player::class)
     */
    private $playerConvocation;

    /**
     * @ORM\OneToOne(targetEntity=FootballMatch::class, cascade={"persist", "remove"})
     */
    private $matchConvocation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlayerConvocation(): ?Player
    {
        return $this->playerConvocation;
    }

    public function setPlayerConvocation(?Player $playerConvocation): self
    {
        $this->playerConvocation = $playerConvocation;

        return $this;
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
}
