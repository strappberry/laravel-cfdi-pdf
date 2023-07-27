# Generar pdf para un cfdi

[![Latest Version on Packagist](https://img.shields.io/packagist/v/strappberry/laravel-cfdi-pdf.svg?style=flat-square)](https://packagist.org/packages/strappberry/laravel-cfdi-pdf)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/strappberry/laravel-cfdi-pdf/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/strappberry/laravel-cfdi-pdf/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/strappberry/laravel-cfdi-pdf/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/strappberry/laravel-cfdi-pdf/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/strappberry/laravel-cfdi-pdf.svg?style=flat-square)](https://packagist.org/packages/strappberry/laravel-cfdi-pdf)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.


## Installation

You can install the package via composer:

```bash
composer require strappberry/laravel-cfdi-pdf
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-cfdi-pdf-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-cfdi-pdf-views"
```

## Usage

```php
$laravelCfdiPdf = new Strappberry\LaravelCfdiPdf();
echo $laravelCfdiPdf->echoPhrase('Hello, Strappberry!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ivan Aquino](https://github.com/IvanAquino)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
