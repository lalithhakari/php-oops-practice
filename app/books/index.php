<?php

declare(strict_types=1);
echo 'Welcome to OOPS' . PHP_EOL;

require_once('models/DigitalBook.php');

$digitalBook1 = new DigitalBook(
    title: 'The Digital Book 1',
    price: '9.99',
    author: 'John Doe',
    format: 'PDF',
    year: 2021
);

echo $digitalBook1->getTest() . PHP_EOL;

echo $digitalBook1->getTitle() . PHP_EOL;

$digitalBook2 = $digitalBook1;
$digitalBook2->setTitle('The Digital Book 2');

echo $digitalBook1->getTitle() . PHP_EOL;
echo $digitalBook2->getTitle() . PHP_EOL;
