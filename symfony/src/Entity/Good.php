<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\GoodRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GoodRepository::class)
 */
class Good
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $sku;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\ManyToMany(targetEntity=Rule::class, mappedBy="Good")
     */
    private $Rule;

    public function __construct()
    {
        $this->Rule = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return Collection|Rule[]
     */
    public function getRule(): Collection
    {
        return $this->Rule;
    }

    public function addRule(Rule $rule): self
    {
        if (!$this->Rule->contains($rule)) {
            $this->Rule[] = $rule;
            $rule->addGood($this);
        }

        return $this;
    }

    public function removeRule(Rule $rule): self
    {
        if ($this->Rule->removeElement($rule)) {
            $rule->removeGood($this);
        }

        return $this;
    }
}
