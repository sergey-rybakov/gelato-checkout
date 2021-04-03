<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\RuleSessionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RuleSessionRepository::class)
 */
class RuleSession extends Rule
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=1024, nullable=true)
     */
    private $Description;

    /**
     * @ORM\Column(type="rule_session_discount_type")
     */
    private $sessionDiscountType;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $sessionDiscount;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getSessionDiscountType()
    {
        return $this->sessionDiscountType;
    }

    public function setSessionDiscountType($sessionDiscountType): self
    {
        $this->sessionDiscountType = $sessionDiscountType;

        return $this;
    }

    public function getSessionDiscount(): ?string
    {
        return $this->sessionDiscount;
    }

    public function setSessionDiscount(string $sessionDiscount): self
    {
        $this->sessionDiscount = $sessionDiscount;

        return $this;
    }
}
