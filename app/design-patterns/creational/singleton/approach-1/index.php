<?php

require_once('./Database.php');

$db1 = Database::getInstance();
$db2 = Database::getInstance();

echo $db1->getConnection() . PHP_EOL;
echo $db2->getConnection() . PHP_EOL;

echo $db1 === $db2 ? 'Same instance' : 'Different instance';
echo PHP_EOL;
