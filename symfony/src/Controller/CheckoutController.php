<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundException;
use Psr\Log\LoggerInterface;

class CheckoutController
{
    /**
     * Checkout method, processes Promo rules and returns actual checkout object 
     * @Route("/checkout", name="checkout")
     */
    public function checkout(Request $request, LoggerInterface $logger): Response
    {
        if(false === ($sku = $request->query->get('sku'))){
            throw $this->createNotFoundException('Query parameter sku is mandatory');
        }
        
        $logger->info('Incoming checkout request: SKU='.$sku);

        // step 1 - try to find enabled good with passed in GET parameter SKU
        // step 2 - run a rules processing method from the promoProcessor service
        // step 3 - build and return the response 

        return $this->json([
            'checkout' => ['Here should be an object with actual checkout data'], //TODO wrap with serializer and create DTO
        ]);
    }
}
