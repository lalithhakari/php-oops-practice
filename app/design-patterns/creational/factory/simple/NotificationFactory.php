<?php

require_once('Notification.php');
require_once('EmailNotification.php');
require_once('SmsNotification.php');

class NotificationFactory
{
    public static function createNotification(string $type): Notification
    {
        // This is not maintainable because we need to modify this method every time we add a new notification type.
        if ($type === 'email') {
            return new EmailNotification();
        } elseif ($type === 'sms') {
            return new SmsNotification();
        } else {
            throw new \InvalidArgumentException('Invalid notification type');
        }
    }
}
