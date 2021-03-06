<?php
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;

    // MÉTODOS SOBREPOR
    public function locomover(){
        echo '<p>Nadando</p>';
    }

    public function alimentar(){
        echo '<p>Comendo substâncias marinhas</p>';
    }

    public function emitirSom(){
        echo '<p>Som de repitl</p>';
    }

    // MÉTODO DA CLASSE PEIXE
    public function soltarBolha(){
        echo '<p>Solta uma bolha</p>';
    }

    // MÉTODOS ESPECIAIS
    // COR DA ESCAMA 
    public function getCorEscama()
    {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
        return $this;
    }
}