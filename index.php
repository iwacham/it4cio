<?php

/*
Importando arquivos de configuracao
*/
require __DIR__ . '/vendor/autoload.php';

/*
Aplicacoes que vou usar
*/
use Silex\Application;

/*
Preciso instanciar o Application
*/
$app = new Application();
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/servicos.php';
/*
Rotas
posso chamar paginas, controllers
*/

$app->get('/', 'pessoa.controller:indexAction');
$app->post('/Pessoa/Salvar','pessoa.controller:salvarPessoa');
$app->post('/Pessoa/Update','pessoa.controller:updatePessoa');
$app->get('/Pessoa/{codigo}', 'pessoa.controller:detalheAction');
$app->get('/Pessoa/Editar/{codigo}', 'pessoa.controller:formEditAction');
$app->get('/Pessoa/Excluir/{codigo}','pessoa.controller:removePessoa');
$app->post('/Dependente/Salvar','dependente.controller:salvarDependente');
$app->get('/Dependente/Excluir/{codigo}/{pessoa}','dependente.controller:removeDependente');


/*
Executa toda a aplicacao
*/
$app->run();