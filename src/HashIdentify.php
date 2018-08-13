<?php

namespace BrentKozjak\LaravelHashIdentify;

use Illuminate\Hashing\HashManager;
use BrentKozjak\HashIdentify\HashIdentify as Identify;

class HashIdentify extends HashManager
{
    /**
     * Identify the hash algorithm of a string
     * @param string $string The hash to identify
     * @return Illuminate\Support\Collection
     */
    public static function identify($string)
    {
        $identify = new Identify();
        return collect($identify->parse($string)->modes);
    }
}
