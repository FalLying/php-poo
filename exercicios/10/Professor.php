<?php


class Professor extends Pessoa
{
    private $salario, $especialidade;

    public function receberAumento()
    {

    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @return mixed
     */
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * @param mixed $salario
     */
    public function setSalario($salario): void
    {
        $this->salario = $salario;
    }

    /**
     * @param mixed $especialidade
     */
    public function setEspecialidade($especialidade): void
    {
        $this->especialidade = $especialidade;
    }

}