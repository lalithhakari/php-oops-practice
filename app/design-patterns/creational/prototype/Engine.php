<?php

class Engine
{
    public $type;
    public $horsepower;

    public function __construct(string $type = 'V8', int $horsepower = 400)
    {
        $this->type = $type;
        $this->horsepower = $horsepower;
    }
}
