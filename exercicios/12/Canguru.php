<?php
require_once "Mamifero.php";

class Canguru extends Mamifero
{
    public function usarBolsa()
    {
        echo "Usando a bolsa";
    }

    public function locomover()
    {
        echo "<p>Pulando</p>";
    }
}