<?php

namespace Vldmir\LaravelIso3166\Facades;

use Illuminate\Support\Facades\Facade;

class CountryService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'countryservice';
    }
}
