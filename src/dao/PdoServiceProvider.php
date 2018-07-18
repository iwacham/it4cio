<?php
/**
 * Criado por: Tiago Iwamoto
 * Data: 08/07/2017
 * Hora: 15:45
 * Email: ${EMAIL}
 */

namespace App\itacio\dao;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Silex\Application;

class PdoServiceProvider implements ServiceProviderInterface
{

    /**
     * Registers services on the given app.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     */
    public function register(Container $app)
    {
        $app['pdo'] = function($c){
            $pdo = new \PDO($c['pdo.dsn'], $c['pdo.usr'], $c['pdo.pwd']);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
            return $pdo;
        };
    }

    /**
     * Bootstraps the application.
     *
     * This method is called after all services are registered
     * and should be used for "dynamic" configuration (whenever
     * a service must be requested).
     */
    public function boot(Application $app)
    {
        // TODO: Implement boot() method.
    }
}