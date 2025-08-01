<?php

namespace hilalahmad0101\LaraUI;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class LaraUIServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'lara-ui');

        Blade::component('lara-ui::components.button', 'ui-button');
    }

    public function register() {}
}
