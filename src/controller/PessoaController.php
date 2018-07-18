<?php
/**
 * Created by PhpStorm.
 * User: Tiago
 * Date: 17/07/2018
 * Time: 17:35
 */

namespace App\itacio\controller;


use App\itacio\dao\DependenteDao;
use App\itacio\dao\PessoaDao;
use App\itacio\dao\RelacionamentoDao;
use App\itacio\model\Pessoa;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class PessoaController
{

    public function __construct(PessoaDao $pessoaDao, DependenteDao $dependenteDao, RelacionamentoDao $relacionamentoDao){
        $this->pessoaDao = $pessoaDao;
        $this->dependenteDao = $dependenteDao;
        $this->relacionamentoDao = $relacionamentoDao;
    }

    /**
     * Traz a lista de pessoas
     */
    public function indexAction(Application $app){
        $pessoas = $this->pessoaDao->findAll();

        return $app['twig']->render('/pessoa/lista.twig', [
           'pessoas' => $pessoas
        ]);
    }

    /**
     * Traz o formulario para cadastro de pessoa
     * @return null
     */
    public function createAction(Application $app){

        return null;
    }

    /**
     * Recebe uma pessoa e grava no banco
     * @return null
     */
    public function salvarPessoa(Application $app, Request $req){
        $form = $req->request->all();

        $pessoa = new Pessoa();
        $pessoa->setNome($form['nome']);
        $pessoa->setDataNascimento($form['dataNascimento']);
        $pessoa->setEmail($form['email']);
        $pessoa->setCodigo(null);
        $nPessoa = $this->pessoaDao->save($pessoa);

        if($nPessoa != null){
            $res = Array("code" => 200, "msg" => "Pessoa adicionado com sucesso !");
            return json_encode($res);
        }else{
            $res = Array("code" => 400, "msg" => "Falha ao adicionar pessoa !");
            return json_encode($res);
        }
    }

    /**
     * Recebe uma pessoa e grava no banco
     * @return null
     */
    public function updatePessoa(Application $app, Request $req){
        $form = $req->request->all();

        $pessoa = new Pessoa();
        $pessoa->setNome($form['nome']);
        $pessoa->setDataNascimento($form['dataNascimento']);
        $pessoa->setEmail($form['email']);
        $pessoa->setCodigo($form['codigo']);
        $nPessoa = $this->pessoaDao->save($pessoa);

        if($nPessoa->getCodigo() != null){
            $res = Array("code" => 200, "msg" => "Pessoa gravada com sucesso !");
            return json_encode($res);
        }else{
            $res = Array("code" => 400, "msg" => "Falha ao gravar pessoa !");
            return json_encode($res);
        }
    }

    public function formEditAction(Application $app, $codigo){

        $pessoa = $this->pessoaDao->findOne($codigo);
        $dependentes = $this->dependenteDao->findAllByPessoa($codigo);

        //TODO: para gravar usa o mesmo salvarPessoa()
        return $app['twig']->render('/pessoa/editar.twig', [
            'pessoa' => $pessoa,
            'dependentes' => $dependentes
        ]);
    }

    /**
     * Traz o formulario para edicao de pessoa
     * @param Application $app
     * @return null
     */
    public function detalheAction(Application $app, $codigo){

        $pessoa = $this->pessoaDao->findOne($codigo);
        $dependentes = $this->dependenteDao->findAllByPessoa($codigo);

        //TODO: para gravar usa o mesmo salvarPessoa()
        return $app['twig']->render('/pessoa/detalhe.twig', [
            'pessoa' => $pessoa,
            'dependentes' => $dependentes
        ]);
    }

    /**
     * Remove uma pessoa do banco
     * @param Application $app
     * @return null
     */
    public function removePessoa(Application $app, $codigo){

        $isDelete = $this->pessoaDao->delete($codigo);

        if($isDelete){
            $pessoas = $this->pessoaDao->findAll();

            return $app['twig']->render('/pessoa/lista.twig', [
                'pessoas' => $pessoas
            ]);
        }else{
            return $app['twig']->render('/pessoa/erro.twig');
        }


    }

}