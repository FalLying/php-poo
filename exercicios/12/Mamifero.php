<?php
require_once 'Animal.php';

class Mamifero extends Animal
{
    private $corPelo;

    public function locomover()
    {
        echo "<p>Correndo</p>";
    }

    public function alimentar()
    {
        echo "<p>Mamando</p>";
    }

    public function emitirSom()
    {
        echo "<p>Som de mamifero</p>";
    }

    /**
     * @return mixed
     */
    public function getCorPelo()
    {
        return $this->corPelo;
    }

    /**
     * @param mixed $corPelo
     */
    public function setCorPelo($corPelo): void
    {
        $this->corPelo = $corPelo;
    }
}