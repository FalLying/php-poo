<?php


class Funcionario extends Pessoa
{
    private $setor, $trabalhando;

    public function mudarTrabalho()
    {

    }

    /**
     * @return mixed
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * @return mixed
     */
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    /**
     * @param mixed $setor
     */
    public function setSetor($setor): void
    {
        $this->setor = $setor;
    }

    /**
     * @param mixed $trabalhando
     */
    public function setTrabalhando($trabalhando): void
    {
        $this->trabalhando = $trabalhando;
    }

}