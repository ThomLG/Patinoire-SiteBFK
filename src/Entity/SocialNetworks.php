<?php

namespace App\Entity;

use App\Repository\SocialNetworksRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SocialNetworksRepository::class)
 */
class SocialNetworks
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
    private $socialNetworkName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $socialNetworkLink;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSocialNetworkName(): ?string
    {
        return $this->socialNetworkName;
    }

    public function setSocialNetworkName(string $socialNetworkName): self
    {
        $this->socialNetworkName = $socialNetworkName;

        return $this;
    }

    public function getSocialNetworkLink(): ?string
    {
        return $this->socialNetworkLink;
    }

    public function setSocialNetworkLink(string $socialNetworkLink): self
    {
        $this->socialNetworkLink = $socialNetworkLink;

        return $this;
    }
}
