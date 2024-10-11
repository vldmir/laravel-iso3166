# Laravel ISO3166

[![Latest Version on Packagist](https://img.shields.io/packagist/v/vldmir/laravel-iso3166.svg?style=flat-square)](https://packagist.org/packages/vldmir/laravel-iso3166)
[![Total Downloads](https://img.shields.io/packagist/dt/vldmir/laravel-iso3166.svg?style=flat-square)](https://packagist.org/packages/vldmir/laravel-iso3166)
[![License](https://img.shields.io/packagist/l/vldmir/laravel-iso3166.svg?style=flat-square)](https://github.com/vldmir/laravel-iso3166/blob/main/LICENSE.md)

Laravel ISO3166 provides a convenient wrapper for the `league/iso3166` library, allowing you to retrieve country information within your Laravel applications.

## Installation

Install via Composer:

```bash
composer require vldmir/laravel-iso3166
```

If using Laravel <5.5, manually add service provider and facade:

```php
'providers' => [
    Vldmir\LaravelIso3166\Providers\CountryServiceProvider::class,
],
'aliases' => [
    'CountryService' => Vldmir\LaravelIso3166\Facades\CountryService::class,
],
```

## Usage

```php
use CountryService;

// Retrieve country by name
$country = CountryService::getByName('Canada');
echo $country->name;    // Canada
echo $country->alpha2;  // CA

// Retrieve country by alpha-2 code
$country = CountryService::getByAlpha2('US');
echo $country->name;    // United States of America

// Retrieve country by numeric code
$country = CountryService::getByNumeric('124');
echo $country->name;    // Canada
```

## Testing

Run tests using PHPUnit:

```bash
vendor/bin/phpunit
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for recent changes.

## Contributing

Contributions are welcome! Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security issues, please email [vld.romantsov@gmail.com](mailto:vld.romantsov@gmail.com).

## Credits

- [Volodymyr Romantsov](https://github.com/vldmir)

## License

The MIT License (MIT). Please see [LICENSE](LICENSE.md) for details.
