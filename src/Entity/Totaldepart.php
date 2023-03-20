<?php

namespace App\Entity;

use App\Repository\TotaldepartRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TotaldepartRepository::class)
 */
class Totaldepart
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
    private $total;

    /**
     * @ORM\Column(type="integer")
     */
    private $semaind;

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

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(?int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getSemaind(): ?int
    {
        return $this->semaind;
    }

    public function setSemaind(int $semaind): self
    {
        $this->semaind = $semaind;

        return $this;
    }
}
