<?php

namespace Vemcogroup\Websockets;

use Illuminate\Support\ServiceProvider;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'websockets');

        // Register migrations
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
    }
}
