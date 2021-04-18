<?php

namespace App\Entity;

use App\Repository\PreinscriptionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=PreinscriptionRepository::class)
 */
class Preinscription
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Regex(
     *     pattern="/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u",
     *     message="Your name cannot contain a number")
     */
    private $preInscriptionLastName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Regex(
     *     pattern="/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u",
     *     message="Your name cannot contain a number")
     */
    private $preInscriptionFirstName;

    /**
     * @ORM\Column(type="date")
     */
    private $preInscriptionDateBirth;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message="Veuillez entrer une adresse e-mail valide")
     */
    /* Assert/email permet de préciser à l'utilisateur de saisir un email correct*/
   private $preInscriptionEmail;
   /**
    * @ORM\Column(type="string", length=10)
    * @Assert\Regex(pattern="/[0-9]{10}/", message="Veuillez entrer un numéro de téléphone valide")
    */
    /* Assert/Regex permet de n'accepter que les nombres et max 10 caractères*/
    private $preInscriptionPhoneNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $preInscriptionPosition;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $preInscriptionLastClub;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $preInscriptionCategory;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPreInscriptionLastName(): ?string
    {
        return $this->preInscriptionLastName;
    }

    public function setPreInscriptionLastName(string $preInscriptionLastName): self
    {
        $this->preInscriptionLastName = $preInscriptionLastName;

        return $this;
    }

    public function getPreInscriptionFirstName(): ?string
    {
        return $this->preInscriptionFirstName;
    }

    public function setPreInscriptionFirstName(string $preInscriptionFirstName): self
    {
        $this->preInscriptionFirstName = $preInscriptionFirstName;

        return $this;
    }

    public function getPreInscriptionDateBirth(): ?\DateTimeInterface
    {
        return $this->preInscriptionDateBirth;
    }

    public function setPreInscriptionDateBirth(\DateTimeInterface $preInscriptionDateBirth): self
    {
        $this->preInscriptionDateBirth = $preInscriptionDateBirth;

        return $this;
    }

    public function getPreInscriptionEmail(): ?string
    {
        return $this->preInscriptionEmail;
    }

    public function setPreInscriptionEmail(string $preInscriptionEmail): self
    {
        $this->preInscriptionEmail = $preInscriptionEmail;

        return $this;
    }

    public function getPreInscriptionPhoneNumber(): ?string
    {
        return $this->preInscriptionPhoneNumber;
    }

    public function setPreInscriptionPhoneNumber(string $preInscriptionPhoneNumber): self
    {
        $this->preInscriptionPhoneNumber = $preInscriptionPhoneNumber;

        return $this;
    }

    public function getPreInscriptionPosition(): ?string
    {
        return $this->preInscriptionPosition;
    }

    public function setPreInscriptionPosition(string $preInscriptionPosition): self
    {
        $this->preInscriptionPosition = $preInscriptionPosition;

        return $this;
    }

    public function getPreInscriptionLastClub(): ?string
    {
        return $this->preInscriptionLastClub;
    }

    public function setPreInscriptionLastClub(string $preInscriptionLastClub): self
    {
        $this->preInscriptionLastClub = $preInscriptionLastClub;

        return $this;
    }

    public function getPreInscriptionCategory(): ?Category
    {
        return $this->preInscriptionCategory;
    }

    public function setPreInscriptionCategory(?Category $preInscriptionCategory): self
    {
        $this->preInscriptionCategory = $preInscriptionCategory;

        return $this;
    }

}
