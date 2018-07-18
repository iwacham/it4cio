<?php
/**
 * Created by PhpStorm.
 * User: Tiago
 * Date: 17/07/2018
 * Time: 17:40
 */

namespace App\itacio\controller;


use App\itacio\dao\DependenteDao;
use App\itacio\dao\PessoaDao;
use App\itacio\model\Dependente;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class DependenteController{

    public function __construct(PessoaDao $pessoaDao, DependenteDao $dependenteDao){
        $this->pessoaDao = $pessoaDao;
        $this->dependenteDao = $dependenteDao;
    }

    /**
     * Traz a lista de dependentes
     */
    public function indexAction(Application $app){

        return null;
    }

    /**
     * Traz o formulario para cadastro de dependente
     * @return null
     */
    public function createAction(Application $app){

        return null;
    }

    /**
     * Recebe um dependente e grava no banco
     * @return null
     */
    public function salvarDependente(Application $app, Request $req){
        $form = $req->request->all();

        $total = $this->dependenteDao->findAllByPessoa($form['fkPessoa']);
        if(count($total) == 3){
            $res = Array("code" => 400, "msg" => "Você já possui 3 dependentes !");
            return json_encode($res);
        }else{
            $dependente = new Dependente();
            $dependente->setNome($form['nome']);
            $dependente->setPessoa($form['fkPessoa']);
            $dependente->setRelacionamentoPessoa($form['relacionamento']);
            $dependente->setDataNascimento($form['dataNascimento']);
            $dependente->setCodigo(null);
            $this->dependenteDao->save($dependente);


            $res = Array("code" => 200, "msg" => "Dependente adicionado com sucesso !");
            return json_encode($res);
        }
    }

    /**
     * Traz o formulario para edicao de dependente
     * @param Application $app
     * @return null
     */
    public function editAction(Application $app, $codigo){

        //TODO: para gravar usa o mesmo salvarPessoa()
        return null;
    }

    /**
     * Remove um dependente do banco
     * @param Application $app
     * @return null
     */
    public function removeDependente(Application $app, $codigo, $pessoa){
        $this->dependenteDao->delete($codigo);
        $nPessoa = $this->pessoaDao->findOne($pessoa);
        $dependentes = $this->dependenteDao->findAllByPessoa($pessoa);

        //TODO: para gravar usa o mesmo salvarPessoa()
        return $app['twig']->render('/pessoa/detalhe.twig', [
            'pessoa' => $nPessoa,
            'dependentes' => $dependentes
        ]);
    }

}