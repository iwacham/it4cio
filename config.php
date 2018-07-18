<?php
/**
 * Created by PhpStorm.
 * User: Tiago
 * Date: 17/07/2018
 * Time: 17:25
 */

//Nome da aplicacao
$app['site.nome'] = 'it4cio';
//Habilitando/desabilitando o debug
$app['debug'] = true;
//Endereco onde o site estara
$app['site.url'] = 'http://localhost/it4cio';

//Banco de dados
$app['pdo.dsn'] = 'pgsql:host=localhost;port=5432;dbname=itacio';
//Usuario de acesso ao banco
$app['pdo.usr'] = 'postgres';
//Senha para acesso ao banco
$app['pdo.pwd'] = 'iwamoto';

