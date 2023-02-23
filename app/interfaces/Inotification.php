<?php

namespace App\interfaces;

use App\Models\Subscriber;

interface Inotification
{
    public function send(Subscriber $subscriber, $message);
}
