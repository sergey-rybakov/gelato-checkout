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
     * @OA\Property(description="List of checked out goods", default=null)
     * @OA\Items(type="<App\Entity\Good>")
     */

    protected ?array $goods = null;
    /**
     * @OA\Property(description="List of Promo rules applied" default=null)
     * * @OA\Items(type="<App\Entity\Rule>")
     */

    protected ?array $rules = null;

      /**
     * @OA\Property(description="Checkout session summary" default=null)
     */

    protected ?CheckoutSummary $summary = null;

    /**
     * @OA\Property(description="Errors" default=null)
     */
    protected ?ErrorResponse $errors = null;

    /**
     * Get the value of goods
     */ 

    public function getGoods(): array
    {
        return $this->goods;
    }

    /**
     * Set the value of goods
     */ 
    public function setGoods($goods): self
    {
        $this->goods = $goods;

        return $this;
    }

    /**
     * Get the value of Rules
     */ 
    public function getRules(): ?array
    {
        return $this->rules;
    }

    /**
     * Set the value of Rules
     */ 
    public function setRules($rules): self
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * Get the value of summary
     */ 
    public function getSummary(): ?CheckoutSummary
    {
        return $this->summary;
    }

    /**
     * Set the value of summary
     */ 
    public function setSummary($summary): self
    {
        $this->summary = $summary;

        return $this;
    }

    /**
     * Get the value of errors
     */ 
    public function getErrors(): ?ErrorResponse
    {
        return $this->errors;
    }

    /**
     * Set the value of errors
     */ 
    public function setErrors($errors): self
    {
        $this->errors = $errors;

        return $this;
    }
}