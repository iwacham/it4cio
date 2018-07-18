<?php
/**
 * Created by PhpStorm.
 * User: iBolt
 * Date: 26/09/2017
 * Time: 17:23
 */

$app->register(new Silex\Provider\ServiceControllerServiceProvider());
$app->register(new Silex\Provider\SessionServiceProvider());
$app->register(new \App\itacio\dao\PdoServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path' => __DIR__ . '/src/view',
    'twig.options' => [
        'cache' => __DIR__ . '/cache'
    ]
]);

$app['pessoa'] = function ($c){
    return new \App\itacio\dao\PessoaDao($c['pdo']);
};

$app['dependente'] = function ($c){
    return new \App\itacio\dao\DependenteDao($c['pdo']);
};

$app['relacionamento'] = function ($c){
    return new \App\itacio\dao\RelacionamentoDao($c['pdo']);
};

$app['pessoa.controller'] = function ($c){
    return new \App\itacio\controller\PessoaController($c['pessoa'], $c['dependente'], $c['relacionamento']);
};

$app['dependente.controller'] = function ($c){
    return new \App\itacio\controller\DependenteController($c['pessoa'], $c['dependente']);
};