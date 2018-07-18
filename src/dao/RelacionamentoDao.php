<?php
/**
 * Created by PhpStorm.
 * User: Tiago
 * Date: 17/07/2018
 * Time: 20:37
 */

namespace App\itacio\dao;


class RelacionamentoDao{

    //atributo pdo que sera utilizado por toda a classe dao
    protected $pdo;

    /**
     * Construtor que usa o PDO para
     * executar os comandos sql
     *
     * PessoaDao constructor.
     * @param \PDO $pdo
     */
    public function __construct(\PDO $pdo){
        $this->pdo = $pdo;
    }

    /**
     * Traz uma lista com todos os dependentes
     * @return array|null
     */
    public function findAll(){
        try{

            $st = $this->pdo->prepare("SELECT codigo, nome FROM relacao_pessoa_dependente");
            //Executando a query
            $st->execute();
            //Gravando o resultado em uma variavel
            //fetchAll retorna um array com todos os registros encontrados
            $res = $st->fetchAll();

            return $res;
        }catch (\Exception $e){
            return null;
        }
    }

}