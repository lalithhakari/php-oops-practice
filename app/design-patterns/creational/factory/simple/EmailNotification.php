<?php

require_once('Notification.php');

class EmailNotification implements Notification
{
    public function send(string $message): void
    {
        echo "Email notification: {$message}\n";
    }
}
