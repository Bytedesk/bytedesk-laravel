<?php

namespace Bytedesk\LaravelChat;

use Illuminate\Support\ServiceProvider;

class BytedeskServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/bytedesk.php', 'bytedesk'
        );
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/bytedesk.php' => config_path('bytedesk.php'),
        ], 'config');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'bytedesk');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/bytedesk'),
        ], 'views');
    }
} 