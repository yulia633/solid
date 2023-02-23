<?php

namespace App\Models;

use App\interfaces\Inotification;
use App\Models\Subscriber;

class SmsNotification implements Inotification
{

    public function send(Subscriber $subscriber, $message)
    {
        echo "{$subscriber->getName()}. SmsNotification: {$message}<br />";
    }
}
