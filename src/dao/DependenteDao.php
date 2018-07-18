<?php
/**
 * Created by PhpStorm.
 * User: Tiago
 * Date: 17/07/2018
 * Time: 17:42
 */

namespace App\itacio\dao;


use App\itacio\model\Dependente;

class DependenteDao
{
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

            $st = $this->pdo->prepare("SELECT codigo, fk_pessoa, fk_relacao, data_nascimento, nome FROM dependentes");
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

    /**
     * Traz uma lista com todos os dependentes
     * @return array|null
     */
    public function findAllByPessoa($codigoPessoa){
        try{

            $st = $this->pdo->prepare("SELECT codigo, fk_pessoa, fk_relacao, data_nascimento, nome FROM dependentes WHERE fk_pessoa = ?");
            $st->bindValue(1, $codigoPessoa);
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

    public function save(Dependente $dependente){
        try{
            if($dependente->getCodigo() == null){
                $st = $this->pdo->prepare('INSERT INTO dependentes (fk_pessoa, fk_relacao, data_nascimento, nome) VALUES (?, ?, ?, ?)');
            }else{
                $st = $this->pdo->prepare('UPDATE dependentes SET fk_pessoa = ?, fk_relacao = ?, data_nascimento = ?, nome = ? WHERE codigo = ?');
            }
            $st->bindValue(1, $dependente->getPessoa());
            $st->bindValue(2, $dependente->getRelacionamentoPessoa());
            $st->bindValue(3, $dependente->getDataNascimento());
            $st->bindValue(4, $dependente->getNome());
            if($dependente->getCodigo() != null){
                $st->bindValue(5, $dependente->getCodigo());
            }

            if($st->execute() > 0){
                //Recuperando o id gerado no banco
                $idGerado = $this->pdo->lastInsertId();
                $dependente->setCodigo($idGerado);

                return $dependente;
            }else{
                //TODO: Gera log chamando a classe DAO responsavel
                return null;
            }
        }catch (\Exception $e){
            //TODO: Deve ser enviado um email ou notificacao para informar um erro.
            return null;
        }
    }

    /**
     * Remove um dependente do banco de dados
     * @param Dependente $dependente
     * @return bool
     */
    public function delete($codigo)
    {
        try {
            $st = $this->pdo->prepare('DELETE FROM dependentes WHERE codigo = ?');
            $st->bindValue(1, $codigo);
            if ($st->execute() > 0) {
                return true;
            } else {
                return false;
            }
        }catch (\Exception $e){
            //TODO: Deve ser enviado um email ou notificacao para informar um erro.
            return false;
        }
    }

}