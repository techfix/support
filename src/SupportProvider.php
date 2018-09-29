<?php

namespace TechFix\Support;

use Illuminate\Support\ServiceProvider;

class SupportProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // publish config
        $this->publishes([__DIR__.'/../config/support.php' => config_path('support.php')]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // load config
        $this->mergeConfigFrom(__DIR__.'/../config/support.php', 'support');
    }
}