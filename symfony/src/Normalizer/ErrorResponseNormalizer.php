<?php

namespace App\Normalizer;

use App\DTO\ErrorMessage;
use App\DTO\ErrorResponse;
use Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

/**
 * CheckoutResponse normalizer
 */
class ErrorResponseNormalizer implements ContextAwareNormalizerInterface
{
    private $normalizer;

    public function __construct(ObjectNormalizer $normalizer)
    {
        $this->normalizer = $normalizer;
    }

    public function normalize($object, $format = null, array $context = array())
    {
        return [
            'list' => array_map(
                function ($object) use ($format, $context) {
                    return $this->normalizer->normalize($object, $format, $context);
                },
                $object->getErrors()
            ),
            'count' => (int) $object->count()
        ];
    }
    public function supportsNormalization($data, $format = null, $context = Array())
    {
        return $data instanceof ErrorResponse;
    }
}
