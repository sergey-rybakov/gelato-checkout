<?php

declare(strict_types=1);

namespace App\Dto\Checkout;

use App\Dto\ErrorResponse;
use App\Dto\Checkout\CheckoutSummary;
use App\Entity\Good;
use App\Entity\Rule;
use OpenApi\Annotations as OA;

class CheckoutItem
{
    /**
     * @OA\Property(description="Good", default=null)
     * @OA\Items(type="<App\Entity\Good>")
     */

    protected ?Good $good = null;
    /**
     * @OA\Property(description="Rule" default=null)
     */

    protected ?Rule $rule = null;

      /**
     * @OA\Property(description="CheckoutItem summary" default=null)
     */

    protected ?CheckoutSummary $summary = null;

    /**
     * Get the value of Good
     */ 

    public function getGood(): ?Good
    {
        return $this->good;
    }

    /**
     * Set the value of Good
     */ 
    public function setGood(Good $good): self
    {
        $this->goods = $good;

        return $this;
    }

    /**
     * Get the value of Rule
     */ 
    public function getRule(): ?Rule
    {
        return $this->rule;
    }

    /**
     * Set the value of Rule
     */ 
    public function setRules(Rule $rule): self
    {
        $this->rule = $rule;

        return $this;
    }

    /**
     * Get the value of Summary
     */ 
    public function getSummary(): ?CheckoutSummary
    {
        return $this->summary;
    }

    /**
     * Set the value of summary
     */ 
    public function setSummary(CheckoutSummary $summary): self
    {
        $this->summary = $summary;

        return $this;
    }
    