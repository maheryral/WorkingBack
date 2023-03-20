<?php

namespace App\Entity;

use App\Repository\CommandesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandesRepository::class)
 */
class Commandes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $depart;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nombre;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $semainec;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDepart(): ?int
    {
        return $this->depart;
    }

    public function setDepart(?int $depart): self
    {
        $this->depart = $depart;

        return $this;
    }

    public function getNombre(): ?int
    {
        return $this->nombre;
    }

    public function setNombre(?int $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getSemainec(): ?int
    {
        return $this->semainec;
    }

    public function setSemainec(?int $semainec): self
    {
        $this->semainec = $semainec;

        return $this;
    }
}
