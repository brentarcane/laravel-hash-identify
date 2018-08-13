# A Laravel package to easily determine the possible hash algorithm(s) for a given string

This package is largely based off the excellent Python project [hashID](https://github.com/psypanda/hashID) which is included in Kali Linux by default.

In addition to supporting over 220 hashing algorithms, this package can also include corresponding hashcat mode and JohnTheRipper format.

This package extends Laravel's default `HashManager` class, so you can easily use it to both generate and identify hashes using the `Hash` facade.

## Requirements

PHP 7 and Laravel 5.5 or higher.

## Installation

You can install the package via composer:

```
composer require "brentkozjak/laravel-hash-identify":"^1.0.0"
```

The package the the facade will be autodiscovered by Laravel.

## Usage

This package extends Laravel's `HashManager` class, allowing you to use the default `Hash` facade like so:

```php
// Create a hash using Laravel's default Hash::make() method.
$hash = \Hash::make('example');

// Identify the possible hashing algorithm(s) used to create $hash
$hash_modes = \Hash::identify($hash);

// $hash_modes is an instance of a standard Laravel Collection
$hash_modes->pluck('name');
$hash_modes->toArray();
...
```

## A note on performance

This package unavoidably uses a lot of `preg_match` regular expressions to match a hashing algorithm.  While I have found performance to be quite acceptable, I am of course open to further optimisations.

## Todo

Tests!

## License

This project is open-sourced software licensed under the [GNU GENERAL PUBLIC LICENSE](https://www.gnu.org/licenses/gpl-3.0.en.html)
