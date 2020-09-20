<?php

namespace App\Entity;

use App\Repository\BtwRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BtwRepository::class)
 */
class Btw
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Product::class, mappedBy="no")
     */
    private $Product_id;

    public function __construct()
    {
        $this->Product_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Product[]
     */
    public function getProductId(): Collection
    {
        return $this->Product_id;
    }

    public function addProductId(Product $productId): self
    {
        if (!$this->Product_id->contains($productId)) {
            $this->Product_id[] = $productId;
            $productId->setNo($this);
        }

        return $this;
    }

    public function removeProductId(Product $productId): self
    {
        if ($this->Product_id->contains($productId)) {
            $this->Product_id->removeElement($productId);
            // set the owning side to null (unless already changed)
            if ($productId->getNo() === $this) {
                $productId->setNo(null);
            }
        }

        return $this;
    }
}
