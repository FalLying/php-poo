<?php
require_once "Gafanhoto.php";
require_once "Video.php";

class Visualizacao
{
    private $espectador, $filme;

    /**
     * Visualizacao constructor.
     * @param $espectador
     * @param $filme
     */
    public function __construct($espectador, $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;

        $this->filme->setView($this->filme->getView + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }

    function avaliar()
    {
        $this->filme->setAvaliacao(5);
    }

    function avaliarNota($nota)
    {
        $this->filme->setAvaliacao($nota);
    }

    function avaliarPorcentagem($porcentagem)
    {
        $nova = 0;
        if ($porcentagem <= 20)
        {
            $nova = 3;
        } elseif ($porcentagem <= 50)
        {
            $nova = 5;
        } elseif ($porcentagem <= 90)
        {
            $nova = 8;
        } else
        {
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }

    /**
     * @return mixed
     */
    public function getEspectador()
    {
        return $this->espectador;
    }

    /**
     * @return mixed
     */
    public function getFilme()
    {
        return $this->filme;
    }

    /**
     * @param mixed $espectador
     */
    public function setEspectador($espectador): void
    {
        $this->espectador = $espectador;
    }

    /**
     * @param mixed $filme
     */
    public function setFilme($filme): void
    {
        $this->filme = $filme;
    }
}