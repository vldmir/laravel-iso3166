<?php

namespace Vldmir\LaravelIso3166\Services;

use League\ISO3166\ISO3166;
use Vldmir\LaravelIso3166\Models\Country;

class CountryService
{
    protected $iso3166;

    public function __construct()
    {
        $this->iso3166 = new ISO3166();
    }

    public function getByName($name)
    {
        try {
            $data = $this->iso3166->name($name);
            return $this->createCountry($data);
        } catch (\Exception $e) {
            return null;
        }
    }

    public function getByAlpha2($alpha2)
    {
        try {
            $data = $this->iso3166->alpha2($alpha2);
            return $this->createCountry($data);
        } catch (\Exception $e) {
            return null;
        }
    }

    public function getByAlpha3($alpha3)
    {
        try {
            $data = $this->iso3166->alpha3($alpha3);
            return $this->createCountry($data);
        } catch (\Exception $e) {
            return null;
        }
    }

    public function getByNumeric($numeric)
    {
        try {
            $data = $this->iso3166->numeric($numeric);
            return $this->createCountry($data);
        } catch (\Exception $e) {
            return null;
        }
    }

    protected function createCountry(array $data)
    {
        return new Country(
            $data['name'],
            $data['alpha2'],
            $data['alpha3'],
            $data['numeric']
        );
    }
}
