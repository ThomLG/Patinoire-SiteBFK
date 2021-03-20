<?php

namespace App\Entity;

use App\Repository\StadiumRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StadiumRepository::class)
 */
class Stadium
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
    private $stadiumName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stadiumAdress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stadiumCity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStadiumName(): ?string
    {
        return $this->stadiumName;
    }

    public function setStadiumName(string $stadiumName): self
    {
        $this->stadiumName = $stadiumName;

        return $this;
    }

    public function getStadiumAdress(): ?string
    {
        return $this->stadiumAdress;
    }

    public function setStadiumAdress(string $stadiumAdress): self
    {
        $this->stadiumAdress = $stadiumAdress;

        return $this;
    }

    public function getStadiumCity(): ?string
    {
        return $this->stadiumCity;
    }

    public function setStadiumCity(string $stadiumCity): self
    {
        $this->stadiumCity = $stadiumCity;

        return $this;
    }
}
