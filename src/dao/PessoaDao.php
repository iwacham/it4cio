<?php
/**
 * Created by PhpStorm.
 * User: Tiago
 * Date: 17/07/2018
 * Time: 17:42
 */

namespace App\itacio\dao;


use App\itacio\model\Pessoa;

class PessoaDao
{
    //atributo que toda a classe vai utilizar
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
     * Metodo retorna todos os registros de pessoas com seus dependentes e relacao
     * @return array
     */
    public function findAll(){
        /*$st eh uma abreviacao para Statement
                    Lembrando que JAMAIS deve ser feito um Select *,
                    sempre devemos especificar cada coluna que vamos usar
                */
        $sql = "SELECT p.codigo AS p_codigo, p.nome AS p_nome, p.email AS p_email, p.data_nascimento as p_nascimento ";
        $sql .= "FROM pessoa AS p";
        $st = $this->pdo->prepare($sql);
        //Executando a query
        $st->execute();
        //Gravando o resultado em uma variavel
        //fetchAll retorna um array com todos os registros encontrados
        $res = $st->fetchAll();

        return $res;
    }

    /**
     * Metodo retorna todos os registros de pessoas com seus dependentes e relacao
     * @return array
     */
    public function findOne($codigo){
        /*$st eh uma abreviacao para Statement
                    Lembrando que JAMAIS deve ser feito um Select *,
                    sempre devemos especificar cada coluna que vamos usar
                */
        $sql = "SELECT p.codigo AS p_codigo, p.nome AS p_nome, p.email AS p_email, p.data_nascimento as p_nascimento, ";
        $sql .= "d.codigo AS d_codigo, d.data_nascimento AS d_nascimento, d.nome AS d_nome, ";
        $sql .= "r.codigo AS r_codigo, r.nome AS r_nome ";
        $sql .= "FROM pessoa AS p ";
        $sql .= "LEFT JOIN dependentes AS d ON d.fk_pessoa = p.codigo ";
        $sql .= "LEFT JOIN relacao_pessoa_dependente AS r ON d.fk_relacao = r.codigo ";
        $sql .= "WHERE p.codigo = ?";
        $st = $this->pdo->prepare($sql);
        $st->bindValue(1, $codigo);
        //Executando a query
        $st->execute();
        //Gravando o resultado em uma variavel
        //fetchAll retorna um array com todos os registros encontrados
        $res = $st->fetch();

        return $res;
    }

    /**
     * Grava ou atualiza uma pessoa no banco de dados
     * @param Pessoa $pessoa
     * @return Pessoa|null
     */
    public function save(Pessoa $pessoa){
        try{
            if($pessoa->getCodigo() == null){
                $st = $this->pdo->prepare('INSERT INTO pessoa (nome, email, data_nascimento) VALUES (?, ?, ?)');
            }else{
                $st = $this->pdo->prepare('UPDATE pessoa SET nome = ?, email = ?, data_nascimento = ? WHERE codigo = ?');
            }
            $st->bindValue(1, $pessoa->getNome());
            $st->bindValue(2, $pessoa->getEmail());
            $st->bindValue(3, $pessoa->getDataNascimento());
            if($pessoa->getCodigo() != null){
                $st->bindValue(4, $pessoa->getCodigo());
            }

            if($st->execute() > 0){
                //Recuperando o id gerado no banco
                if($pessoa->getCodigo() == null) {
                    $idGerado = $this->pdo->lastInsertId();
                    $pessoa->setCodigo($idGerado);
                }

                return $pessoa;
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
     * Remove uma pessoa do banco de dados
     * @param Pessoa $pessoa
     * @return bool
     */
    public function delete($codigo)
    {
        try {
            $st = $this->pdo->prepare('DELETE FROM pessoa WHERE codigo = ?');
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