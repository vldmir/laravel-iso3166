<?php

namespace Vldmir\LaravelIso3166\Models;

class Country
{
    public $name;
    public $alpha2;
    public $alpha3;
    public $numeric;

    public function __construct($name, $alpha2, $alpha3, $numeric)
    {
        $this->name    = $name;
        $this->alpha2  = $alpha2;
        $this->alpha3  = $alpha3;
        $this->numeric = $numeric;
    }
}
