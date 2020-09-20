<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Btw::class, inversedBy="Product_id")
     * @ORM\JoinColumn(nullable=false)
     */
    private $no;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNo(): ?Btw
    {
        return $this->no;
    }

    public function setNo(?Btw $no): self
    {
        $this->no = $no;

        return $this;
    }
}
