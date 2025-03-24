<?php

require_once('interfaces/FlyingBehaviour.php');

class CrowSparrowFlyingBehaviour implements FlyingBehaviour
{
    public function fly()
    {
        echo 'Crow/Sparrow is flying' . PHP_EOL;
    }
}
