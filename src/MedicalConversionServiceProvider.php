<?php

namespace Hagag\MedicalConversion;
use Illuminate\Support\ServiceProvider;

class MedicalConversionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Hagag\MedicalConversion\MedicalConversionController');
    }
}
