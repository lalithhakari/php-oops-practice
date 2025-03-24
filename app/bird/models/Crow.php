<?php

require_once('abstracts/Bird.php');
require_once('interfaces/Flyable.php');
require_once('interfaces/FlyingBehaviour.php');
require_once('behaviours/CrowSparrowFlyingBehaviour.php');

class Crow extends Bird implements Flyable
{
    protected $fb;

    public function __construct(FlyingBehaviour $fb)
    {
        $this->fb = $fb;
    }

    public function fly()
    {
        $fb = new CrowSparrowFlyingBehaviour();
        $fb->fly();
        // echo 'Crow is flying like zuppppp' . PHP_EOL;
    }

    public function eat()
    {
        echo 'Crow is eating' . PHP_EOL;
    }

    public function makeSound()
    {
        echo 'Crow is making sound' . PHP_EOL;
    }
}
