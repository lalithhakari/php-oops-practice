<?php

require_once('abstracts/Bird.php');
require_once('interfaces/Flyable.php');

class Pigeon extends Bird implements Flyable
{
    public function fly()
    {
        echo 'Pigeon is flying' . PHP_EOL;
    }

    public function eat()
    {
        echo 'Pigeon is eating' . PHP_EOL;
    }

    public function makeSound()
    {
        echo 'Pigeon is making sound' . PHP_EOL;
    }
}
