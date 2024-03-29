<?php

namespace tearsilent\LaravelScheduler\Facades;

use Illuminate\Support\Facades\Facade;

class VisitStats extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-visitor-tracker';
    }
}
