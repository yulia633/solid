<?php

namespace App\Models;

use App\interfaces\Inotification;
use App\Models\Subscriber;

class TelegramNotification implements Inotification
{

    public function send(Subscriber $subscriber, $message)
    {
        echo "{$subscriber->getName()}. TelegramNotification: {$message}<br />";
    }
}
