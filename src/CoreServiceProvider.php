<?php 

namespace convesto\core;

use Illuminate\Support\ServiceProvider;

/**
 * A Laravel 5.5 package boilerplate
 *
 * @author: Thomas Lorentzen (tgl@its.aau.dk)
 */
class CoreServiceProvider extends ServiceProvider {

    /**
     * This will be used to register config & view in 
     * your package namespace.
     *
     * @var  string
     */
    protected $packageName = 'core';

    /**
     * A list of artisan commands for your package
     * 
     * @var array
     */
    protected $commands = [
        //Commands\WBMCommand::class,
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //$this->loadRoutesFrom(__DIR__ . '/../routes/routes.php');

        // Regiter migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        // Publish your config
        /*
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path($this->packageName.'.php'),
        ], 'config');
        */

        if ($this->app->runningInConsole()) {
            $this->commands($this->commands);
        }

        // Observers
        /*
        if (!$this->app->runningInConsole())
        {
            //\App\Order::observe( new \AAU_ITS\WBM_module\Observers\OrderObserver );
        }
        */

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Merge library configurations with application configurations
        /*
        $this->mergeConfigFrom(
            __DIR__ . '/../config/config.php', $this->packageName
        );
        */

        //$this->app->make('AAU_ITS\WBM_module\Controllers\WBMController');
        //$this->app->register(EventServiceProvider::class);
    }

}
