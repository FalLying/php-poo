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

    private function getNome()
    {
        return $this->nome;
    }

    private function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    private function getIdade()
    {
        return $this->idade;
    }

    private function getAltura()
    {
        return $this->altura;
    }

    private function getPeso()
    {
        return $this->peso;
    }

    private function getCategoria()
    {
        return $this->categoria;
    }

    private function getVitorias()
    {
        return $this->vitorias;
    }

    private function getDerrotas()
    {
        return $this->derrotas;
    }

    private function getEmpates()
    {
        return $this->empates;
    }

    private function setNome($nome): void
    {
        $this->nome = $nome;
    }

    private function setNacionalidade($nacionalidade): void
    {
        $this->nacionalidade = $nacionalidade;
    }

    private function setIdade($idade): void
    {
        $this->idade = $idade;
    }

    private function setAltura($altura): void
    {
        $this->altura = $altura;
    }

    private function setPeso($peso): void
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria(): void
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

    private function setVitorias($vitorias): void
    {
        $this->vitorias = $vitorias;
    }

    private function setDerrotas($derrotas): void
    {
        $this->derrotas = $derrotas;
    }

    private function setEmpates($empates): void
    {
        $this->empates = $empates;
    }

}