<?php

require_once('abstracts/Bird.php');
require_once('interfaces/Flyable.php');

class Sparrow extends Bird implements Flyable
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
        // echo 'Sparrow is flying like zuppppp' . PHP_EOL;
    }

    public function eat()
    {
        echo 'Sparrow is eating' . PHP_EOL;
    }

    public function makeSound()
    {
        echo 'Sparrow is making sound' . PHP_EOL;
    }
}
