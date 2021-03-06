<?php
require_once 'Peixe.php';
class Goldfish extends Peixe{
        // MÉTODOS SOBREPOR
        public function locomover(){
            echo '<p>Apenas nada</p>';
        }
        public function alimentar(){
            echo '<p>Ração para peixe</p>';
        }
    
        public function emitirSom(){
            echo '<p>não emite som</p>';
        }
    
        // MÉTODO DA CLASSE PEIXE
        public function soltarBolha(){
            echo '<p>Solta uma bolha</p>';
        }
}