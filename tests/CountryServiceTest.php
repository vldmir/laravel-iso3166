<?php

use PHPUnit\Framework\TestCase;
use Vldmir\LaravelIso3166\Services\CountryService;
use Vldmir\LaravelIso3166\Models\Country;

class CountryServiceTest extends TestCase
{
    protected $countryService;

    protected function setUp(): void
    {
        $this->countryService = new CountryService();
    }

    public function testCanGetCountryByName()
    {
        $country = $this->countryService->getByName('Canada');

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals('Canada', $country->name);
        $this->assertEquals('CA', $country->alpha2);
        $this->assertEquals('CAN', $country->alpha3);
        $this->assertEquals('124', $country->numeric);
    }

    public function testCanGetCountryByAlpha2()
    {
        $country = $this->countryService->getByAlpha2('US');

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals('United States of America', $country->name);
        $this->assertEquals('US', $country->alpha2);
        $this->assertEquals('USA', $country->alpha3);
        $this->assertEquals('840', $country->numeric);
    }

    public function testCanGetCountryByAlpha3()
    {
        $country = $this->countryService->getByAlpha3('GBR');

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals('United Kingdom of Great Britain and Northern Ireland', $country->name);
        $this->assertEquals('GB', $country->alpha2);
        $this->assertEquals('GBR', $country->alpha3);
        $this->assertEquals('826', $country->numeric);
    }

    public function testCanGetCountryByNumeric()
    {
        $country = $this->countryService->getByNumeric('250');

        $this->assertInstanceOf(Country::class, $country);
        $this->assertEquals('France', $country->name);
        $this->assertEquals('FR', $country->alpha2);
        $this->assertEquals('FRA', $country->alpha3);
        $this->assertEquals('250', $country->numeric);
    }

    public function testReturnsNullForInvalidName()
    {
        $country = $this->countryService->getByName('InvalidCountry');

        $this->assertNull($country);
    }

    public function testReturnsNullForInvalidAlpha2()
    {
        $country = $this->countryService->getByAlpha2('XX');

        $this->assertNull($country);
    }

    public function testReturnsNullForInvalidAlpha3()
    {
        $country = $this->countryService->getByAlpha3('XXX');

        $this->assertNull($country);
    }

    public function testReturnsNullForInvalidNumeric()
    {
        $country = $this->countryService->getByNumeric('999');

        $this->assertNull($country);
    }
}
