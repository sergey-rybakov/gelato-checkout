<?php

declare(strict_types=1);

namespace App\DBAL;

class RuleGoodDiscountType extends AbstractEnumType
{
    public const ENUM_RULE_GOOD_DISCOUNT_TYPE = 'GOOD_DISCOUNT_TYPE';

    public const SUM_PER_ITEM = 'sum_per_item';
    public const SUM_FOR_SUBSET = 'sum_for_subset';
    public const PERCENT_FOR_SUBSET = 'percent_for_subset';

    public function getName()
    {
        return self::ENUM_RULE_GOOD_DISCOUNT_TYPE;
    }

    public function getVariants(): array
    {
        return [
            self::SUM_PER_ITEM,
            self::SUM_FOR_SUBSET,
            self::PERCENT_FOR_SUBSET,
        ];
    }
}