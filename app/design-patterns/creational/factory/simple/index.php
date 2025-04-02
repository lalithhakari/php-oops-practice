<?php

require_once('NotificationFactory.php');

$emailNotification = NotificationFactory::createNotification('email');

$emailNotification->send('This is an email notification');
