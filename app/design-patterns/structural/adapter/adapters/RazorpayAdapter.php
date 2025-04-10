<?php

require_once 'interfaces/PaymentGateway.php';

class RazorpayAdapter implements PaymentGateway
{
    private $razorpay;

    public function __construct(Razorpay $razorpay)
    {
        $this->razorpay = $razorpay;
    }

    public function processPayment(float $amount): bool
    {
        // Use Razorpay's API to process the payment
        return $this->razorpay->makePayment($amount);
    }
}
