<?php
require_once "AcoesVideo.php";

class Video implements AcoesVideo
{
    private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;

    /**
     * Video constructor.
     * @param $titulo
     */
    public function __construct($titulo)
    {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }


    function play()
    {
        $this->reproduzindo = true;
    }

    function pause()
    {
        $this->reproduzindo = false;
    }

    function like()
    {
        $this->curtidas++;
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
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    /**
     * @return mixed
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * @return mixed
     */
    public function getCurtidas()
    {
        return $this->curtidas;
    }

    /**
     * @return mixed
     */
    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @param mixed $avaliacao
     */
    public function setAvaliacao($avaliacao): void
    {
        $media = ($this->avaliacao + $avaliacao) / $this->views;
        $this->avaliacao = $media;
    }

    /**
     * @param mixed $views
     */
    public function setViews($views): void
    {
        $this->views = $views;
    }

    /**
     * @param mixed $curtidas
     */
    public function setCurtidas($curtidas): void
    {
        $this->curtidas = $curtidas;
    }

    /**
     * @param mixed $reproduzindo
     */
    public function setReproduzindo($reproduzindo): void
    {
        $this->reproduzindo = $reproduzindo;
    }
}