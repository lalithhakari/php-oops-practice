<?php

require_once('Config.php');

// Check how Config singleton saves data...
$config1 = Config::getInstance();
$config1->setValue("login", 'test_login');
$config1->setValue("password", 'test_password');
$config2 = Config::getInstance();
if (
    $config1->getValue("login") == $config2->getValue("login") &&
    $config1->getValue("password") == $config2->getValue("password")
) {
    echo "Config singleton has same instance." . PHP_EOL;
}
