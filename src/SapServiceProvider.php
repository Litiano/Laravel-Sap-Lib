<?php
/**
 * Created by PhpStorm.
 * User: Litiano
 * Date: 05/07/2017
 * Time: 15:25
 */

namespace Litiano\Sap;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Support\ServiceProvider;

class SapServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/sap.php' => config_path('sap.php'),
        ], 'config');

        /** @var Manager $databaseManager */
        $databaseManager = $this->app->make(Manager::class);
        $databaseManager->addConnection(config('sap.db'), 'sap');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $configPath = __DIR__ . '/../config/sap.php';
        $this->mergeConfigFrom($configPath, 'sap');
    }
}