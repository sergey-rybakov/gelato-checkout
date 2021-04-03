<?php

declare(strict_types=1);

namespace App\DBAL;

class RuleSessionDiscountType extends AbstractEnumType
{
    public const ENUM_RULE_SESSION_DISCOUNT_TYPE = 'CHECKOUT_DISCOUNT_TYPE';

    public const SUM_PER_SESSION = 'sum_per_session';
    public const PERCENT_PER_SESSION = 'percent_per_session';

    public function getName()
    {
        return self::ENUM_RULE_SESSION_DISCOUNT_TYPE;
    }

    public function getVariants(): array
    {
        return [
            self::SUM_PER_SESSION,
            self::PERCENT_PER_SESSION,
        ];
    }
}