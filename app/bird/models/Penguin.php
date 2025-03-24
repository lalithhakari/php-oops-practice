<?php

require_once('abstracts/Bird.php');

class Penguin extends Bird
{
    public function eat()
    {
        echo 'Penguin is eating' . PHP_EOL;
    }

    public function makeSound()
    {
        echo 'Penguin is making sound' . PHP_EOL;
    }
}
