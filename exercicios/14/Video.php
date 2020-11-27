<?php
require_once "AcoesVideo.php";

class Video implements AcoesVideo
{
    private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;

    function play()
    {
        // TODO: Implement play() method.
    }

    function pause()
    {
        // TODO: Implement pause() method.
    }

    function like()
    {
        // TODO: Implement like() method.
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
        $this->avaliacao = $avaliacao;
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