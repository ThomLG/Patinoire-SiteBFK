<?php

namespace App\Entity;

use App\Repository\PlayerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlayerRepository::class)
 */
class Player
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
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $position;

    /**
     * @ORM\Column(type="date")
     */
    private $dateOfBirth;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nbMatches;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nbGoals;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nbAssits;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $playerPhoto;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\ManyToMany(targetEntity=MatchConvocation::class, mappedBy="playerConvocation")
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

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(\DateTimeInterface $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getNbMatches(): ?string
    {
        return $this->nbMatches;
    }

    public function setNbMatches(string $nbMatches): self
    {
        $this->nbMatches = $nbMatches;

        return $this;
    }

    public function getNbGoals(): ?string
    {
        return $this->nbGoals;
    }

    public function setNbGoals(string $nbGoals): self
    {
        $this->nbGoals = $nbGoals;

        return $this;
    }

    public function getNbAssits(): ?string
    {
        return $this->nbAssits;
    }

    public function setNbAssits(string $nbAssits): self
    {
        $this->nbAssits = $nbAssits;

        return $this;
    }

    public function getPlayerPhoto(): ?string
    {
        return $this->playerPhoto;
    }

    public function setPlayerPhoto(?string $playerPhoto): self
    {
        $this->playerPhoto = $playerPhoto;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }


    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function __toString():string
    {
        return $this->getLastName();
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
            $matchConvocation->addPlayerConvocation($this);
        }

        return $this;
    }

    public function removeMatchConvocation(MatchConvocation $matchConvocation): self
    {
        if ($this->matchConvocations->removeElement($matchConvocation)) {
            $matchConvocation->removePlayerConvocation($this);
        }

        return $this;
    }

}
