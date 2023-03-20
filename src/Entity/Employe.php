<?php

namespace App\Entity;

use App\Repository\EmployeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=EmployeRepository::class)
 */
class Employe implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nomep;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenomep;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datenaissep;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adressep;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $situationep;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $telep;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cinep;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $modepayep;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typhorep;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mdp;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNomep(): ?string
    {
        return $this->Nomep;
    }

    public function setNomep(string $Nomep): self
    {
        $this->Nomep = $Nomep;

        return $this;
    }

    public function getPrenomep(): ?string
    {
        return $this->Prenomep;
    }

    public function setPrenomep(string $Prenomep): self
    {
        $this->Prenomep = $Prenomep;

        return $this;
    }

    public function getDatenaissep(): ?\DateTimeInterface
    {
        return $this->datenaissep;
    }

    public function setDatenaissep(?\DateTimeInterface $datenaissep): self
    {
        $this->datenaissep = $datenaissep;

        return $this;
    }

    public function getAdressep(): ?string
    {
        return $this->adressep;
    }

    public function setAdressep(?string $adressep): self
    {
        $this->adressep = $adressep;

        return $this;
    }

    public function getSituationep(): ?string
    {
        return $this->situationep;
    }

    public function setSituationep(?string $situationep): self
    {
        $this->situationep = $situationep;

        return $this;
    }

    public function getTelep(): ?string
    {
        return $this->telep;
    }

    public function setTelep(?string $telep): self
    {
        $this->telep = $telep;

        return $this;
    }

    public function getCinep(): ?string
    {
        return $this->cinep;
    }

    public function setCinep(string $cinep): self
    {
        $this->cinep = $cinep;

        return $this;
    }

    public function getModepayep(): ?string
    {
        return $this->modepayep;
    }

    public function setModepayep(?string $modepayep): self
    {
        $this->modepayep = $modepayep;

        return $this;
    }

    public function getTyphorep(): ?string
    {
        return $this->typhorep;
    }

    public function setTyphorep(?string $typhorep): self
    {
        $this->typhorep = $typhorep;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }
}
