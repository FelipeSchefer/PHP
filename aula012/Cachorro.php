<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero{
        // MÉTODOS SOBREPOR
        public function locomover(){
            echo '<p>Correndo com 4 patas</p>';
        }
        public function alimentar(){
            echo '<p>Ração</p>';
        }
    
        public function emitirSom(){
            echo '<p>Latido</p>';
        }
    
}