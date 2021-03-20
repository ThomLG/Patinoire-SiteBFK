<?php

namespace App\Entity;

use App\Repository\PlayerRepository;
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
}
