<?php

namespace App\Normalizer;

use App\DTO\Checkout\CheckoutItem;
use App\DTO\Checkout\CheckoutSummary;
use App\DTO\Checkout\CheckoutRes;
use App\Entity\Rule;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

/**
 * CheckoutResponse normalizer
 */
class CheckoutResponseNormalizer implements ContextAwareNormalizerInterface
{
    private $normalizer;

    public function __construct(ObjectNormalizer $normalizer)
    {
        $this->normalizer = $normalizer;
    }

    public function normalize($object, $format = null, array $context = array())
    {
        if(null !== $object->getErrors()){
            return [
                'errors' => array_map(
                    function ($object) use ($format, $context) {
                        return $this->normalizer->normalize($object, $format, $context);
                    },
                    $object->getErrors()
                )
            ];
        }else{
            return [
                'items' => array_map(
                    function ($object) use ($format, $context) {
                        return $this->normalizer->normalize($object, $format, $context);
                    },
                    $object->getItems()
                ),
                'rules' => array_map(
                    function ($object) use ($format, $context) {
                        return $this->normalizer->normalize($object, $format, $context);
                    },
                    $object->getRules()
                ),
                'summary' => $this->normalizer->normalize($object->getSummary(), $format, $context),
                'totalPrice' => $object
                                    ->getSummary()
                                    ->getTotalGoodsPriceSum(),
            ];
        }
    }    

    public function supportsNormalization($data, $format = null, $context = Array())
    {
        return $data instanceof CheckoutResponse;
    }
}