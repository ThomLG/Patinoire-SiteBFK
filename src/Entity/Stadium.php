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
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stadiumAdress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stadiumPostalCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stadiumCity;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=8)
     */
    private $longitude;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=8)
     */
    private $latitude;

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

    public function getStadiumAdress(): ?string
    {
        return $this->stadiumAdress;
    }

    public function setStadiumAdress(string $stadiumAdress): self
    {
        $this->stadiumAdress = $stadiumAdress;

        return $this;
    }

    public function getStadiumPostalCode(): ?string
    {
        return $this->stadiumPostalCode;
    }

    public function setStadiumPostalCode(string $stadiumPostalCode): self
    {
        $this->stadiumPostalCode = $stadiumPostalCode;

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

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }
}
