<?php


class Lutador
{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    /**
     * Lutador constructor.
     * @param $nome
     * @param $nacionalidade
     * @param $idade
     * @param $altura
     * @param $peso
     * @param $vitorias
     * @param $derrotas
     * @param $empates
     */
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    public function apresentar()
    {
        echo "<br>Lutador: ".$this->getNome();
        echo "<br>Origem: ".$this->getNacionalidade();
        echo "<br>Idade: ".$this->getIdade();
        echo "<br>Altura: ".$this->getAltura();
        echo "<br>Pesando: ".$this->getPeso();
        echo "<br>Ganhou: ".$this->getVitorias();
        echo "<br>Perdeu: ".$this->getDerrotas();
        echo "<br>Empatou: ".$this->getEmpates();
    }

    public function status()
    {
        echo "<br>Lutador: ".$this->getNome();
        echo "<br>Pesando: ".$this->getPeso();
        echo "<br>Ganhou: ".$this->getVitorias();
        echo "<br>Perdeu: ".$this->getDerrotas();
        echo "<br>Empatou: ".$this->getEmpates();
    }

    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }

    function getNome()
    {
        return $this->nome;
    }

    function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    function getIdade()
    {
        return $this->idade;
    }

    function getAltura()
    {
        return $this->altura;
    }

    function getPeso()
    {
        return $this->peso;
    }

    function getCategoria()
    {
        return $this->categoria;
    }

    function getVitorias()
    {
        return $this->vitorias;
    }

    function getDerrotas()
    {
        return $this->derrotas;
    }

    function getEmpates()
    {
        return $this->empates;
    }

    function setNome($nome): void
    {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade): void
    {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade): void
    {
        $this->idade = $idade;
    }

    function setAltura($altura): void
    {
        $this->altura = $altura;
    }

    function setPeso($peso): void
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    function setCategoria(): void
    {
        if ($this->peso < 52.2)
        {
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3)
        {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9)
        {
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2)
        {
            $this->categoria = "Pesado";
        } else
        {
            $this->categoria = "Inválido";
        }
    }

    function setVitorias($vitorias): void
    {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas): void
    {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates): void
    {
        $this->empates = $empates;
    }

}