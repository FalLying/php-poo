<?php


abstract class Animal
{
    protected $peso, $idade, $membros;

    public abstract function locomover();
    public abstract function alimentar();
    public abstract function emitirSom();

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @return mixed
     */
    public function getMembros()
    {
        return $this->membros;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso): void
    {
        $this->peso = $peso;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade): void
    {
        $this->idade = $idade;
    }

    /**
     * @param mixed $membros
     */
    public function setMembros($membros): void
    {
        $this->membros = $membros;
    }
}