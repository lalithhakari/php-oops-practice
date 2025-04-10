<?php

require_once 'interfaces/PaymentGateway.php';

class StripeAdapter implements PaymentGateway
{
    private $stripe;

    public function __construct(Stripe $stripe)
    {
        $this->stripe = $stripe;
    }

    public function processPayment(float $amount): bool
    {
        // Use Stripe's API to process the payment
        return $this->stripe->charge($amount);
    }
}
