<?php

namespace App\Entity;

use App\Repository\BfkTeamOpponentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BfkTeamOpponentRepository::class)
 */
class BfkTeamOpponent
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
    private $opponentName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $opponentLogo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOpponentName(): ?string
    {
        return $this->opponentName;
    }

    public function setOpponentName(string $opponentName): self
    {
        $this->opponentName = $opponentName;

        return $this;
    }

    public function getOpponentLogo(): ?string
    {
        return $this->opponentLogo;
    }

    public function setOpponentLogo(string $opponentLogo): self
    {
        $this->opponentLogo = $opponentLogo;

        return $this;
    }

    public function __toString():string //permet de renvoyer le nom des équipes (exemple easy admin en faisant une association field)
    {
        return $this->getOpponentName();
    }
}
