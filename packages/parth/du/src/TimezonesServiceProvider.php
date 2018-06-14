<?php

namespace Parth\Du;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //

        $this->loadViewsFrom(__DIR__.'/views', 'timezones');
        $this->publishes([
        __DIR__.'/views' => base_path('resources/views/parth/du'),
    ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'/routes/web.php';
        $this->app->make('Parth\Du\TimezonesController');
    }
}
