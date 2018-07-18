<?php
/**
 * Created by PhpStorm.
 * User: Tiago
 * Date: 17/07/2018
 * Time: 17:32
 */

namespace App\itacio\model;


class Dependente
{

    //region ATRIBUTOS
    private $codigo;
    private $nome;
    private $dataNascimento;
    private $relacionamento_pessoa;
    private $pessoa;
    //endregion

    //region GETTERS AND SETTERS

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * @param mixed $dataNascimento
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    /**
     * @return mixed
     */
    public function getRelacionamentoPessoa()
    {
        return $this->relacionamento_pessoa;
    }

    /**
     * @param mixed $relacionamento_pessoa
     */
    public function setRelacionamentoPessoa($relacionamento_pessoa)
    {
        $this->relacionamento_pessoa = $relacionamento_pessoa;
    }

    /**
     * @return mixed
     */
    public function getPessoa()
    {
        return $this->pessoa;
    }

    /**
     * @param mixed $pessoa
     */
    public function setPessoa($pessoa)
    {
        $this->pessoa = $pessoa;
    }
    //endregion

}