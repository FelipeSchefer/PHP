<?php
require_once 'Animal.php';
class Mamifero extends Animal{
    private $corPelo;

    // MÉTODOS SOBREPOR
    public function locomover(){
        echo '<p>Correndo</p>';
    }

    public function alimentar(){
        echo '<p>Mamando</p>';
    }

    public function emitirSom(){
        echo '<p>som de Mamífero</p>';
    }

    // MÉTODOS ESPECIAIS
    // COR DO PELO
    public function getCorPelo()
    {
        return $this->corPelo;
    } 
    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;
        return $this;
    }
}