<?php

namespace App\Models;

use App\Models\Subscriber;

class Notification
{
    private $subscribers = [];

    public function addSubscriber(Subscriber $subscriber)
    {
        $this->subscribers[] = $subscriber;
    }

    public function send($subscriber, $message)
    {
        /** @var Subscriber $subscriber */
        foreach($this->subscribers as $subscriber) {
            foreach($subscriber->getNotificationChannels() as $channel) {
                $className = "\App\\Models\\ {$channel}";

                $method = new $className();
                $method->send($subscriber, $message);
            }
        }
    }
}
