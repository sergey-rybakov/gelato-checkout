<?php

namespace App\Serializer\Normalizer;

use App\DTO\CheckoutItem;
use App\DTO\CheckoutSummary;
use App\Entity\Rule;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

/**
 * CheckoutResponse normalizer
 */
class CheckoutResponseNormalizer extends SerializerAwareNormalizer implements NormalizerInterface
{
    /**
     * {@inheritdoc}
     */
    public function normalize($object, $format = null, array $context = array())
    {
        return [
            'item' => $this->serializer->normalize($object->getItem(), $format, $context),
            'rule' => $this->serializer->normalize($object->getRule(), $format, $context),
            'summary' => $this->serializer->normalize($object->getSummary(), $format, $context),
        ];
    }
}