<?php

namespace G3ru1a\LivewireUIComponents;

use G3ru1a\LivewireUIComponents\Livewire\Form\PlainInput;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LivewireUIComponentsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //Publish Configuration file
        $this->publishes([
            __DIR__.'/config/lwc.php' => config_path('lwc.php'),
        ], 'public');
        //Publish CSS and JS Files
        $this->publishes([
            __DIR__.'/resources/css' => public_path('../resources/css/lwc'),
        ], 'public');

        //Load Views and Livewire Components
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'lwc-views');
        Livewire::component('lwc::form.plain-input', PlainInput::class);
    }

    public function register()
    {
        //
    }
}
