<?php
require_once 'Ave.php';
class Arara extends Ave{
        // MÉTODOS SOBREPOR
        public function locomover(){
            echo '<p>Voa</p>';
        }
        public function alimentar(){
            echo '<p>Comendo algumas frutas</p>';
        }
    
        public function emitirSom(){
            echo '<p>Canta</p>';
        }
    
        // MÉTODO DA CLASSE AVE
        public function fazerNinho(){
            echo '<p>Construir um ninho em árvores</p>';
        }
}