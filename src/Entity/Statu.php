<?php

namespace App\Entity;

use App\Repository\StatuRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StatuRepository::class)
 */
class Statu
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $stat;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $semains;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStat(): ?string
    {
        return $this->stat;
    }

    public function setStat(?string $stat): self
    {
        $this->stat = $stat;

        return $this;
    }

    public function getSemains(): ?string
    {
        return $this->semains;
    }

    public function setSemains(?string $semains): self
    {
        $this->semains = $semains;

        return $this;
    }
}
