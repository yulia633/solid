<?php

namespace App\Models;

use App\interfaces\Inotification;
use App\Models\Subscriber;

class EmailNotification implements Inotification
{
    public function send(Subscriber $subscriber, $message)
    {
        echo "{$subscriber->getName()}. EmailNotification: {$message}<br />";
    }
}
