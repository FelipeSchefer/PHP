<?php
require_once 'Animal.php';
class Reptil extends Animal{
    private $corEscama;

    // MÉTODOS SOBREPOR
    public function locomover(){
        echo '<p>Rastejando</p>';
    }

    public function alimentar(){
        echo '<p>Comendo vegetais</p>';
    }

    public function emitirSom(){
        echo '<p>Som de repitl</p>';
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