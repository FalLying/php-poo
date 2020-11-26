<?php
require_once "Animal.php";

class Ave extends Animal
{
    private $corPena;

    public function fazerNinho()
    {
        echo "Contruiu um ninho!";
    }

    public function locomover()
    {
        echo "Voando";
    }

    public function alimentar()
    {
        echo "Comendo frutas";
    }

    public function emitirSom()
    {
        echo "Som de ave";
    }

    /**
     * @return mixed
     */
    public function getCorPena()
    {
        return $this->corPena;
    }

    /**
     * @param mixed $corPena
     */
    public function setCorPena($corPena): void
    {
        $this->corPena = $corPena;
    }
}