<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\RuleGoodRepository;
use Doctrine\ORM\Mapping as ORM;
use OpenApi\Annotations as OA;

/**
 * @ORM\Entity(repositoryClass=RuleGoodRepository::class)
 */
class RuleGood extends Rule
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $amount;

    /**
     * @ORM\Column(type="rule_good_discount_type")
     */
    private $RuleGood;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $goodDiscount;
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getRuleGood()
    {
        return $this->RuleGood;
    }

    public function setRuleGood($RuleGood): self
    {
        $this->RuleGood = $RuleGood;

        return $this;
    }

    public function getGoodDiscount(): ?float
    {
        return $this->goodDiscount;
    }

    public function setGoodDiscount(float $goodDiscount): self
    {
        $this->goodDiscount = $goodDiscount;

        return $this;
    }
}
