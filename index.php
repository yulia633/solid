<?php

use App\Models\Notification;
use App\Models\Subscriber;

require_once 'vendor/autoload.php';

$notification = new Notification();
$subscriber1 = new Subscriber(1, 'Иван', 'ivan@test.ru', '+79111112230', ['SmsNotification','EmailNotification','TelegramNotification']);
$notification->addSubscriber($subscriber1);

$subscriber2 = new Subscriber(2, 'Мария', 'maria@test.ru', '+791112345678', ['SmsNotification','EmailNotification']);
$notification->addSubscriber($subscriber2);

$subscriber3 = new Subscriber(3, 'Виктор', 'vick@test.ru', '+79111112233', ['EmailNotification']);
$notification->addSubscriber($subscriber3);

dd($notification);
