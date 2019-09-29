<?php

namespace Mengdodo\LaravelTools;

use Illuminate\Support\ServiceProvider;
use Mengdodo\LaravelTools\Console\Command\PresenterCommand;
use Mengdodo\LaravelTools\Console\Command\RepositoryCommand;
use Mengdodo\LaravelTools\Console\Command\ServiceCommand;
use Mengdodo\LaravelTools\Console\Command\TraitCommand;
use Mengdodo\LaravelTools\Library\LaravelTools;

class LaravelToolsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('LaravelTools', function ($app) {
            return new LaravelTools();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        if ($this->app->runningInConsole()) {
            $this->commands([
                PresenterCommand::class,
                RepositoryCommand::class,
                ServiceCommand::class,
                TraitCommand::class
            ]);
        }
    }
}
