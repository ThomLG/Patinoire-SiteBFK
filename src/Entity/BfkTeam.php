<?php

namespace App\Entity;

use App\Repository\BfkTeamRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BfkTeamRepository::class)
 */
class BfkTeam
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
    private $bfkTeamName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bfkTeamLogo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBfkTeamName(): ?string
    {
        return $this->bfkTeamName;
    }

    public function setBfkTeamName(string $bfkTeamName): self
    {
        $this->bfkTeamName = $bfkTeamName;

        return $this;
    }

    public function getBfkTeamLogo(): ?string
    {
        return $this->bfkTeamLogo;
    }

    public function setBfkTeamLogo(string $bfkTeamLogo): self
    {
        $this->bfkTeamLogo = $bfkTeamLogo;

        return $this;
    }
}
