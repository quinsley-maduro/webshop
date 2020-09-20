<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ImageRepository::class)
 */
class Image
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Product_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductId(): ?Product
    {
        return $this->Product_id;
    }

    public function setProductId(?Product $Product_id): self
    {
        $this->Product_id = $Product_id;

        return $this;
    }
}
