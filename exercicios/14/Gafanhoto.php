<?php
require_once "Pessoa.php";

class Gafanhoto extends Pessoa
{
    private $login, $totAssistido;

    /**
     * Gafanhoto constructor.
     * @param $login
     */
    public function __construct($nome, $idade, $sexo, $login)
    {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    function viuMaisUm()
    {
        $this->totAssistido++;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return mixed
     */
    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login): void
    {
        $this->login = $login;
    }

    /**
     * @param mixed $totAssistido
     */
    public function setTotAssistido($totAssistido): void
    {
        $this->totAssistido = $totAssistido;
    }
}