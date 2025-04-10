<?php

require_once 'interfaces/PaymentGateway.php';

class PaymentProcessor
{
    private $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function process(float $amount): bool
    {
        return $this->paymentGateway->processPayment($amount);
    }
}
