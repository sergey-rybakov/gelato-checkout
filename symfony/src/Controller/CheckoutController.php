<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use App\Dto\ErrorMessage;
use App\Dto\ErrorResponse;
use App\Dto\Checkout\CheckoutResponse;
use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Annotations as OA;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class CheckoutController
{
    /**
     * @Route("/checkout", methods={"GET"}, name="checkout")
     * @OA\Parameter(
     *     name="sku",
     *     in="query",
     *     description="The field used to filter Goods",
     *     allowEmptyValue="false",
     *     schema="string"
     * )
     * @OA\Response(
     *     response="200",
     *     description="Checkout method",
     *     @OA\Schema(ref=@Model(type=CheckoutResponse::class))
     * )
     * @OA\Tag(name="Checkout")
     * @return Resp
     */
    public function checkout( Request $request, LoggerInterface $logger, SerializerInterface $serializer, ObjectNormalizer $objectNormalizer)
    {
        $response = new CheckoutResponse();
        $errorResponse = new ErrorResponse();

        if(false === ($sku = $request->query->get('sku', false))){
            
            $errorResponse
                ->pushError((new ErrorMessage())
                    ->setMessage('GET sku parameter is mandatory'));
        }
       
        $logger->info('Incoming checkout request: SKU='.$sku);

        // step 1 - find enabled good using passed GET parameter SKU
        // step 2 - Run rules processing method from the promoProcessor service
        // step 3 - Build and return the CheckoutResponse
        if(null !== ($errorResponse->getErrors())){
            $response
                ->setErrors($errorResponse);
        }
        
        return new Response($serializer->serialize($response, 'json'));
    }
}
