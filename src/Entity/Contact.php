<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContactRepository::class)
 */
class Contact
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
    private $contactLastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contactFirstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contacyEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contactNbPhone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContactLastName(): ?string
    {
        return $this->contactLastName;
    }

    public function setContactLastName(string $contactLastName): self
    {
        $this->contactLastName = $contactLastName;

        return $this;
    }

    public function getContactFirstName(): ?string
    {
        return $this->contactFirstName;
    }

    public function setContactFirstName(string $contactFirstName): self
    {
        $this->contactFirstName = $contactFirstName;

        return $this;
    }

    public function getContacyEmail(): ?string
    {
        return $this->contacyEmail;
    }

    public function setContacyEmail(string $contacyEmail): self
    {
        $this->contacyEmail = $contacyEmail;

        return $this;
    }

    public function getContactNbPhone(): ?string
    {
        return $this->contactNbPhone;
    }

    public function setContactNbPhone(?string $contactNbPhone): self
    {
        $this->contactNbPhone = $contactNbPhone;

        return $this;
    }
}
