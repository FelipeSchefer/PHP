<?php
    class Caneta{
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada;

        public function rabiscar(){
            if($this->tampada == true){
                echo "ERRO! não podes escrever";
            }
            else{
                echo "Estás rabiscando";
            }
        }

        public function tampar(){
            $this->tampada = true;
        }
        
        public function destampar(){
            $this->tampada = false;
        }
    }
