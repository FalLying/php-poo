<?php
require_once "Animal.php";

class Reptil extends Animal
{
    private $corEscama;

    public function locomover()
    {
        echo "Rastejando";
    }

    public function alimentar()
    {
        echo "Comendo vegetais";
    }

    public function emitirSom()
    {
        echo "Som do reptil";
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