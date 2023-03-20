<?php

namespace App\Entity;

use App\Repository\FondmurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FondmurRepository::class)
 */
class Fondmur
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
    private $fm;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $semainf;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFm(): ?string
    {
        return $this->fm;
    }

    public function setFm(?string $fm): self
    {
        $this->fm = $fm;

        return $this;
    }

    public function getSemainf(): ?string
    {
        return $this->semainf;
    }

    public function setSemainf(?string $semainf): self
    {
        $this->semainf = $semainf;

        return $this;
    }

    
}
