<?php

namespace RaditzFarhan\LumenCommandGenerator;

use Illuminate\Support\ServiceProvider as SP;

class ServiceProvider extends SP
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $commands = ['ModelGenerateCommand', 'ProviderGenerateCommand'];

        // register commands
        if ($this->app->runningInConsole()) {

            $this->commands(collect($commands)->map(function ($name) {
                return __NAMESPACE__ . "\Commands\\$name";
            })->toArray());
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
