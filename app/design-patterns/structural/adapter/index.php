<?php

$dependencyInjection = new RazorpayAdapter(new Razorpay());

$pg = new PaymentProcessor($dependencyInjection);

$pg->process(1000);
