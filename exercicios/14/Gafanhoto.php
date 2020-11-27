<?php
require_once "Pessoa.php";

class Gafanhoto extends Pessoa
{
    private $login, $totAssistido;

    function viuMaisUm()
    {

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