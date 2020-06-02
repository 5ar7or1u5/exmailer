<?php

namespace  5ar7or1u5/Exmailer; 

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class ExmailerServiceProvider extends ServiceProvider
{
    protected $listen = [
        'Illuminate\Mail\Events\MessageSending' => [
            __DIR__.'\Exmailer',
        ],
    ];
}
