<?php

require_once('Engine.php');

class Car
{
    public $brand;
    public $engine;

    public function __construct(string $brand, Engine $engine)
    {
        $this->brand = $brand;
        $this->engine = $engine;
    }

    // This custom __clone() method ensures that the cloned object has a new instance of the Engine object.
    public function __clone()
    {
        $this->engine = clone $this->engine;
    }
}
