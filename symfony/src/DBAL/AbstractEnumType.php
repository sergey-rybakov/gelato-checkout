<?php

namespace App\DBAL;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Type;

abstract class AbstractEnumType extends Type
{
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return sprintf(
            'ENUM(%s)',
            implode(',', array_map(fn (string $variant) => sprintf('\'%s\'', $variant), $this->getVariants()))
        );
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return $value;
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if (!in_array($value, $this->getVariants())) {
            throw new \InvalidArgumentException(sprintf('Enum variant %s::%s doesn\'t not exists', static::class, $value));
        }

        return $value;
    }

    public function requiresSQLCommentHint(AbstractPlatform $platform)
    {
        return true;
    }

    abstract public function getVariants(): array;
}