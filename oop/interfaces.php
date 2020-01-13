<?php

interface PaymentGateway {
    public function pay($amount);
}

class PayStackGateway implements PaymentGateway {
    public function pay($amount)
    {
        echo "Paid $amount via Paystack gateway";
    }
}

class FlutterwaveGateway implements PaymentGateway {

    public function pay($amount)
    {
        echo "Paid $amount via Flutterwave gateway";
    }
}

class Customer {
    private $paymentHandler;

    public function __construct(PaymentGateway $gateway)
    {
        $this->paymentHandler = $gateway;
    }


    public function makePayment($amount)
    {
        $this->paymentHandler->pay($amount);
    }
}


$dolapo = new Customer(new PayStackGateway());
$dolapo->makePayment(4000);

$dolapoSister = new Customer(new FlutterwaveGateway());
$dolapoSister->makePayment(10000);
