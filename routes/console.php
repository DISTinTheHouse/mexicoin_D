<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Scheduling\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('sync:coins-value', function () {
    $this->call('app:sync-coins-value');
})->describe('Sync coin-based product values with current market prices')->everyMinute();
