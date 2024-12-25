# GeezDate is a lightweight and efficient Laravel package that seamlessly converts standard Gregorian dates into the traditional Ethiopian (Geez)  format(N.B. it does not change it to Ethiopian Calendar Date).

[![Latest Version on Packagist](https://img.shields.io/packagist/v/98279891-kiyatilahun/geezdate.svg?style=flat-square)](https://packagist.org/packages/98279891-kiyatilahun/geezdate)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/98279891-kiyatilahun/geezdate/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/98279891-kiyatilahun/geezdate/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/98279891-kiyatilahun/geezdate/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/98279891-kiyatilahun/geezdate/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/98279891-kiyatilahun/geezdate.svg?style=flat-square)](https://packagist.org/packages/98279891-kiyatilahun/geezdate)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/GeezDate.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/GeezDate)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require kiyatilahun/geezdate
```


## Usage
To change a number from 1-100000 
```php
GeezDate::changeNumber($number);
```
example
```php
GeezDate::changeNumber(13); //will return '፲፫'
```

To change a date  to be in Geez
```php
GeezDate::convertToEthiopianDate($date); //in YYYY-MM-DD format only
```
example
```php
GeezDate::convertToEthiopianDate('2024-12-25'); //will return ፳፻፳፬-፲፪-፳፭

```


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [kiyatilahun](https://github.com/KiyaTilahun)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
