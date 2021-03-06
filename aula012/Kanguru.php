<?php
require_once 'Mamifero.php';
class Kanguru extends Mamifero{
        // MÉTODOS SOBREPOR
        public function locomover(){
            echo '<p>Saltando</p>';
        }
        public function alimentar(){
            echo '<p>Frutas</p>';
        }
    
        public function emitirSom(){
            echo '<p>Grunido</p>';
        }
}