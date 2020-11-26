<?php

require_once 'Lutador.php';

class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($desafiado, $desafiante)
    {
        if ($desafiado->getCategoria() === $desafiante->getCategoria()
            && ($desafiado != $desafiante))
        {
            $this->aprovada = true;
            $this->desafiante = $desafiante;
            $this->desafiado = $desafiado;
            echo "Luta marcada.\n------------------------";
        } else
        {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
            echo "Luta não marcada.\n------------------------";
        }

    }

    public function lutar()
    {
        if ($this->aprovada)
        {
            $this->desafiante->apresentar();
            echo "<br>";
            $this->desafiado->apresentar();

            $vencedor = rand(0, 2);

            switch ($vencedor)
            {
                case 0:
                    echo "<p>Resultado:\n------------------------\nEmpate.</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<p>Resultado:\n------------------------\n".$this->desafiado->getNome()."</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>Resultado:\n------------------------\n".$this->desafiante->getNome()."</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        } else
        {
            echo "<p>A luta não pode acontecer.</p>";
        }
    }

    /**
     * @return mixed
     */
    public function getDesafiado()
    {
        return $this->desafiado;
    }

    /**
     * @return mixed
     */
    public function getDesafiante()
    {
        return $this->desafiante;
    }

    /**
     * @return mixed
     */
    public function getRounds()
    {
        return $this->rounds;
    }

    /**
     * @return mixed
     */
    public function getAprovada()
    {
        return $this->aprovada;
    }

    /**
     * @param mixed $desafiado
     */
    public function setDesafiado($desafiado): void
    {
        $this->desafiado = $desafiado;
    }

    /**
     * @param mixed $desafiante
     */
    public function setDesafiante($desafiante): void
    {
        $this->desafiante = $desafiante;
    }

    /**
     * @param mixed $rounds
     */
    public function setRounds($rounds): void
    {
        $this->rounds = $rounds;
    }

    /**
     * @param mixed $aprovada
     */
    public function setAprovada($aprovada): void
    {
        $this->aprovada = $aprovada;
    }



}