<?php

declare(strict_types=1);

namespace App\Dto\Checkout;

use App\Dto\ErrorResponse;
use App\Dto\Checkout\CheckoutSummary;
use App\Dto\Checkout\CheckoutItem;

class CheckoutResponse
{
    protected ?array $items = null;
    protected ?array $rules = null;
    protected ?CheckoutSummary $summary = null;
    protected ?ErrorResponse $errors = null;

    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * Set the value of items
     */ 
    public function setItems($items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * Get the value of rules
     */ 
    public function getRules(): ?array
    {
        return $this->rules;
    }

    /**
     * Set the value of Rules
     */ 
    public function setRules(array $rules): self
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