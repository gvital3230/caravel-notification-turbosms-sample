<?php

use Illuminate\Foundation\Console\ClosureCommand;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Notifications\Sms;

Artisan::command('inspire', function () {
    /** @var ClosureCommand $this */
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command(
    'send-sms {route}?} {body}?}',
    function ($route, $body) {
        Notification::route('turbosms', $route)
            ->notify(new Sms($body));
    }
)->describe('send test SMS');
