<?php

require_once('Car.php');

$car1 = new Car('Toyota', new Engine('V6', 300));

$car2 = clone $car1;
$car2->brand = 'Ford';
$car2->engine->type = 'V8';
$car2->engine->horsepower = 400;

echo 'Car 1: ' . $car1->brand . ' ' . $car1->engine->type . ' ' . $car1->engine->horsepower . PHP_EOL;
echo 'Car 2: ' . $car2->brand . ' ' . $car2->engine->type . ' ' . $car2->engine->horsepower . PHP_EOL;
