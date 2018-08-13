<?php

namespace BrentKozjak\LaravelHashIdentify;

use Illuminate\Support\ServiceProvider;

class HashIdentifyServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('hash-identify', function($app) {
            return new HashIdentify($app);
        });
    }
}
