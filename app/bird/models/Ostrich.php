<?php

require_once('abstracts/Bird.php');

class Ostrich extends Bird
{
    public function eat()
    {
        echo 'Ostrich is eating' . PHP_EOL;
    }

    public function makeSound()
    {
        echo 'Ostrich is making sound' . PHP_EOL;
    }
}
