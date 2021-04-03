<?php

declare(strict_types=1);

namespace App\DBAL;

class RuleType extends AbstractEnumType
{
    public const ENUM_RULE_TYPE = 'GOOD_DISCOUNT_TYPE';

    public const GOOD = 'good';
    public const SESSION = 'session';

    public function getName()
    {
        return self::ENUM_RULE_TYPE;
    }

    public function getVariants(): array
    {
        return [
            self::GOOD,
            self::SESSION,
        ];
    }
}