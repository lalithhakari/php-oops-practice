<?php

declare(strict_types=1);
echo 'Welcome to Design a Bird Amazon problem for OOPS and SOLID design patterns.' . PHP_EOL;

require_once('./models/Pigeon.php');
require_once('./models/Crow.php');
require_once('./models/Sparrow.php');
require_once('./models/Penguin.php');
require_once('./models/Ostrich.php');
require_once('./behaviours/CrowSparrowFlyingBehaviour.php');

$pigeon = new Pigeon();
$pigeon->eat();
$pigeon->makeSound();
$pigeon->fly();

$crow = new Crow(
    new CrowSparrowFlyingBehaviour()
);
$crow->eat();
$crow->makeSound();
$crow->fly();

$sparrow = new Sparrow(
    new CrowSparrowFlyingBehaviour()
);
$sparrow->eat();
$sparrow->makeSound();
$sparrow->fly();

$penguin = new Penguin();
$penguin->eat();
$penguin->makeSound();
// $penguin->fly(); is not Flyable

$ostrich = new Ostrich();
$ostrich->eat();
$ostrich->makeSound();
// $ostrich->fly(); is not Flyable