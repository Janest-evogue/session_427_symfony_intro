<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * cette classe est liée à une table en bdd
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
{
    /**
     * clé primaire
     * @ORM\Id()
     * auto-increment
     * @ORM\GeneratedValue()
     * integer en bdd
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * varchar(50) en bdd
     * @ORM\Column(type="string", length=50)
     */
    private $lastname;

    /**
     * varchar(20) en bdd
     * @ORM\Column(type="string", length=20)
     */
    private $firstname;

    /**
     * varchar(255) unique en bdd
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $email;

    /**
     * champ date nullable en bdd et objet DateTime comme attribut de la classe
     * @ORM\Column(type="date", nullable=true)
     */
    private $birthdate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getBirthdate(): ?\DateTimeInterface
    {
        return $this->birthdate;
    }

    public function setBirthdate(?\DateTimeInterface $birthdate): self
    {
        $this->birthdate = $birthdate;

        return $this;
    }
}
