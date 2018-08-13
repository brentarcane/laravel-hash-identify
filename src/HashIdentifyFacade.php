<?php

namespace BrentKozjak\LaravelHashIdentify;

use Illuminate\Support\Facades\Facade;

class HashIdentifyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hash-identify';
    }
}
