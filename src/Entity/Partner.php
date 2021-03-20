<?php

namespace App\Entity;

use App\Repository\PartnerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PartnerRepository::class)
 */
class Partner
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
    private $partnerName;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $partnerDescription;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $partnerLogo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPartnerName(): ?string
    {
        return $this->partnerName;
    }

    public function setPartnerName(string $partnerName): self
    {
        $this->partnerName = $partnerName;

        return $this;
    }

    public function getPartnerDescription(): ?string
    {
        return $this->partnerDescription;
    }

    public function setPartnerDescription(?string $partnerDescription): self
    {
        $this->partnerDescription = $partnerDescription;

        return $this;
    }

    public function getPartnerLogo(): ?string
    {
        return $this->partnerLogo;
    }

    public function setPartnerLogo(?string $partnerLogo): self
    {
        $this->partnerLogo = $partnerLogo;

        return $this;
    }
}
