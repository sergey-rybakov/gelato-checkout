<?php

namespace App\Normalizer;

use App\DTO\Checkout\CheckoutItem;
use App\DTO\Checkout\CheckoutSummary;
use App\Entity\Rule;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

/**
 * CheckoutItemNormalizer normalizer
 */
class CheckoutItemNormalizer implements ContextAwareNormalizerInterface
{
    private $normalizer;

    public function __construct(ObjectNormalizer $normalizer)
    {
        $this->normalizer = $normalizer;
    }

    public function normalize($object, $format = null, array $context = array())
    {
        return [
            'item' => $this->normalizer->normalize($object->getItem(), $format, $context),
            'rule' => $this->normalizer->normalize($object->getRule(), $format, $context),
            'summary' => $this->normalizer->normalize($object->getSummary(), $format, $context),
        ];
    }

    public function supportsNormalization($data, $format = null, $context = Array())
    {
        return $data instanceof CheckoutItem;
    }
}