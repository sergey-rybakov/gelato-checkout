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
            'items' => array_map(
                function ($object) use ($format, $context) {
                    return $this->serializer->normalize($object, $format, $context);
                },
                $object->getItems()
            ),
            'rules' => array_map(
                function ($object) use ($format, $context) {
                    return $this->serializer->normalize($object, $format, $context);
                },
                $object->getRules()
            ),
            'summary' => $this->serializer->normalize($object->getSummary(), $format, $context),
            'totalPrice' => $object
                                ->getSummary()
                                ->getTotalGoodsPriceSum(),
        ];
    }
}