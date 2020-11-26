<?php
require_once 'Publicacao.php';
require_once 'Pessoa.php';

class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    /**
     * Livro constructor.
     * @param $titulo
     * @param $autor
     * @param $totPaginas
     * @param $pagAtual
     * @param $aberto
     * @param $leitor
     */
    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = 1;
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    public function detalhes()
    {
        echo $this->leitor->getNome()." Está lendo o livro ".$this->getTitulo().
            " e atualmente está na página ".$this->getPagAtual();
    }

    public function abrir()
    {
        $this->aberto = true;
    }

    public function fechar()
    {
        $this->aberto = false;
    }

    public function folhear()
    {
        $r = rand(1, $this->totPaginas);
        $this->setPagAtual($r);
        echo $this->leitor->getNome()." folheou o livro e parou na páginas ".$this->getPagAtual()."\n";
    }

    public function avancarPag()
    {
        if ($this->pagAtual < $this->totPaginas)
        {
            $this->pagAtual = $this->getPagAtual() + 1;
        } else
        {
            $this->pagAtual = 1;
        }
    }

    public function voltarPafg()
    {
        if ($this->pagAtual > 1)
        {
            $this->pagAtual = $this->getPagAtual() - 1;
        } else
        {
            $this->pagAtual = $this->totPaginas;
        }
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @return mixed
     */
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    /**
     * @return mixed
     */
    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    /**
     * @return mixed
     */
    public function getAberto()
    {
        return $this->aberto;
    }

    /**
     * @return mixed
     */
    public function getLeitor()
    {
        return $this->leitor;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor): void
    {
        $this->autor = $autor;
    }

    /**
     * @param mixed $totPaginas
     */
    public function setTotPaginas($totPaginas): void
    {
        $this->totPaginas = $totPaginas;
    }

    /**
     * @param mixed $pagAtual
     */
    public function setPagAtual($pagAtual): void
    {
        $this->pagAtual = $pagAtual;
    }

    /**
     * @param mixed $aberto
     */
    public function setAberto($aberto): void
    {
        $this->aberto = $aberto;
    }

    /**
     * @param mixed $leitor
     */
    public function setLeitor($leitor): void
    {
        $this->leitor = $leitor;
    }

}