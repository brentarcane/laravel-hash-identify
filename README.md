# A Laravel package to easily determine the possible hash algorithm(s) for a given string

This package is largely based off the excellent Python project [hashID](https://github.com/psypanda/hashID) which is included in Kali Linux by default.

In addition to supporting over 220 hashing algorithms, this package can also include corresponding hashcat mode and JohnTheRipper format.

This package extends Laravel's default `HashManager` class, so you can easily use it to both generate and identify hashes using the `Hash` facade.

## Requirements

PHP 7 and Laravel 5.5 or higher.

## Installation

You can install the package via composer:

```php
composer require brentkozjak/laravel-hash-identify
```

The package the the facade will be autodiscovered by Laravel.

## Usage

Using the `Hash` facade:

```php
$string = 'b3b24027c676f8d2cdfa5e2ea8bc1cc7';
$hashTypes = \Hash::identify($string);

var_dump($hashTypes);
```

## Todo

Tests!

### License

This project is open-sourced software licensed under the [GNU GENERAL PUBLIC LICENSE](https://www.gnu.org/licenses/gpl-3.0.en.html)
