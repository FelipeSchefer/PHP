<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    // MÉTODO CONSTRUTOR
    public function __construct($titulo){
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    // MÉTODOS ABSTRADOS
    public function play(){
        $this->reproduzindo = true;
    }
    public function pause(){
        $this->reproduzindo = false;
    }
    public function like(){
        $this->curtidas++;
    }

    // TITULO
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }

    // AVALIAÇÃO
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }
    public function setAvaliacao($avaliacao)
    {
        $media = 0;
        $media = ($this->avaliacao + $avaliacao)/ $this->views;
        $this->avaliacao = $avaliacao;
        return $this;
    }

    // VIEWS
    public function getViews()
    {
        return $this->views;
    } 
    public function setViews($views)
    {
        $this->views = $views;
        return $this;
    }

    // CURTIDAS
    public function getCurtidas()
    {
        return $this->curtidas;
    }
    public function setCurtidas($curtidas)
    {
        $this->curtidas = $curtidas;
        return $this;
    }

    // REPRODUZINDO
    public function getReproduzindo()
    {
        return $this->reproduzindo;
    } 
    public function setReproduzindo($reproduzindo)
    {
        $this->reproduzindo = $reproduzindo;
        return $this;
    }
}