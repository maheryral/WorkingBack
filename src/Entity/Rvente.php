<?php

namespace App\Entity;

use App\Repository\RventeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RventeRepository::class)
 */
class Rvente
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $rv;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $semainr;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRv(): ?string
    {
        return $this->rv;
    }

    public function setRv(?string $rv): self
    {
        $this->rv = $rv;

        return $this;
    }

    public function getSemainr(): ?string
    {
        return $this->semainr;
    }

    public function setSemainr(?string $semainr): self
    {
        $this->semainr = $semainr;

        return $this;
    }
}
