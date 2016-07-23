<?php

namespace Websanova\Demo;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/Http/routes.php';
        }

        $this->loadViewsFrom(__DIR__.'/views', 'websanova-demo');

        $this->publishes([
            __DIR__.'/config/main.php' => config_path('websanova-demo.php'),
        ]);

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/websanova-demo'),
        ]);
        $this->publishes([
            __DIR__.'/migrations' => database_path('migrations'),
        ],'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('websanova-demo', function() {
            return new Demo;
        });

        $this->mergeConfigFrom(
            __DIR__.'/config/main.php', 'websanova-demo'
        );
    }
}
