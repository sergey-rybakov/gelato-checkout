<?php

declare(strict_types=1);

namespace App\Dto\Checkout;

use OpenApi\Annotations as OA;

class CheckoutSummary
{
    protected ?float $totalRawGoodsPriceSum = 0;
    
    /**
     * @OA\Property(description="Sum of all goods' prices in checkout session after all rules applied")
     */
    protected ?float $totalGoodsPriceSum = 0;

    /**
     * @OA\Property(description="Sum of all goods' prices in cart after all rules applied")
     */
    protected ?float $totalDiscountSum = 0;

    /**
     * @OA\Property(description="Total quantity of rules applied to goods in checkout session")
     */
    protected ?int $rulesAppliedCount = 0;

    /**
     * @OA\Property(description="Total quantity of goods in checkout session")
     */
    protected ?int $goodsCount = 0;

    /**
     * Get the value of totalRawGoodsPriceSum
     */ 
    public function getTotalRawGoodsPriceSum(): ?float
    {
        return $this->totalRawGoodsPriceSum;
    }

    /**
     * Set the value of totalRawGoodsPriceSum
     */ 
    public function setTotalRawGoodsPriceSum($totalRawGoodsPriceSum): self
    {
        $this->totalRawGoodsPriceSum = $totalRawGoodsPriceSum;

        return $this;
    }

    /**
     * Get the value of totalGoodsPriceSum
     */ 
    public function getTotalGoodsPriceSum(): ?float
    {
        return $this->totalGoodsPriceSum;
    }

    /**
     * Set the value of totalGoodsPriceSum
     */ 
    public function setTotalGoodsPriceSum($totalGoodsPriceSum): self
    {
        $this->totalGoodsPriceSum = $totalGoodsPriceSum;

        return $this;
    }

    /**
     * Get the value of totalDiscountSum
     */ 
    public function getTotalDiscountSum(): ?float
    {
        return $this->totalDiscountSum;
    }

    /**
     * Set the value of totalDiscountSum
     */ 
    public function setTotalDiscountSum($totalDiscountSum): self
    {
        $this->totalDiscountSum = $totalDiscountSum;

        return $this;
    }

    /**
     * Get the value of rulesAppliedCount
     */ 
    public function getRulesAppliedCount(): int
    {
        return $this->rulesAppliedCount;
    }

    /**
     * Set the value of rulesAppliedCount
     */ 
    public function setRulesAppliedCount(int $rulesAppliedCount): self
    {
        $this->rulesAppliedCount = $rulesAppliedCount;

        return $this;
    }

    /**
     * Get the value of goodsCount
     */ 
    public function getGoodsCount(): int
    {
        return $this->goodsCount;
    }

    /**
     * Set the value of goodsCount
     */ 
    public function setGoodsCount(int $goodsCount) :self
    {
        $this->goodsCount = $goodsCount;

        return $this;
    }
}