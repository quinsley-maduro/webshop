<?php

namespace App\Entity;

use App\Repository\FactuurRegelRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactuurRegelRepository::class)
 */
class FactuurRegel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Factuur::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Factuur_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFactuurId(): ?Factuur
    {
        return $this->Factuur_id;
    }

    public function setFactuurId(?Factuur $Factuur_id): self
    {
        $this->Factuur_id = $Factuur_id;

        return $this;
    }
}
