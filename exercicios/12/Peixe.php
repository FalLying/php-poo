<?php
require_once "Animal.php";

class Peixe extends Animal
{
    private $corEscama;

    public function soltarBolha()
    {
        echo "Soltou uma bolha";
    }

    public function locomover()
    {
        echo "Nadando";
    }

    public function alimentar()
    {
        echo "Comendo substancias";
    }

    public function emitirSom()
    {
        echo "Peixe não faz som";
    }

    /**
     * @return mixed
     */
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * @param mixed $corEscama
     */
    public function setCorEscama($corEscama): void
    {
        $this->corEscama = $corEscama;
    }
}