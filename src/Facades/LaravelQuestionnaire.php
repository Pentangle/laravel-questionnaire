<?php

namespace Pentangle\LaravelQuestionnaire\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pentangle\LaravelQuestionnaire\LaravelQuestionnaire
 */
class LaravelQuestionnaire extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-questionnaire';
    }
}
