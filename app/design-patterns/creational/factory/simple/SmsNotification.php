<?php

require_once('Notification.php');

class SmsNotification implements Notification
{
    public function send(string $message): void
    {
        echo "SMS notification: {$message}\n";
    }
}
