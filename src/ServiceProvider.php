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
        // register commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                \RaditzFarhan\LumenCommandGenerator\Commands\ModelGenerateCommand::class,
            ]);
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
