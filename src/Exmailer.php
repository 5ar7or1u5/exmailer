<?php

namespace  5ar7or1u5/Exmailer; 

use App\User;
use Illuminate\Mail\Events\MessageSending;
use Illuminate\Support\Facades\App;

class Exmailer
{
    public function handle( MessageSending $event )
    {
        if(App::environment() !== 'production'){
            return false;
        }
    }
}
