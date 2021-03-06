<?php
require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;

    // MÉTODOS SOBREPOR
    public function locomover(){
        echo '<p>Voando</p>';
    }

    public function alimentar(){
        echo '<p>Comendo frutas</p>';
    }

    public function emitirSom(){
        echo '<p>Som de ave</p>';
    }

    // MÉTODO DA CLASSE AVE
    public function fazerNinho(){
        echo '<p>Construir um ninho</p>';
    }

    // MÉTODOS ESPECIAIS
    // COR DA PENA 
    public function getCorPena()
    {
        return $this->corPena;
    }
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;
        return $this;
    }
}