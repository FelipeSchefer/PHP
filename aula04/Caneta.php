<?php

class Caneta{
    private $modelo;
    private $ponta;
    private $cor;
    private $tampada;

    /*
    Existem duas maneiras de fazer o metodo construtor este abaixo 
    e o seguinte chamado Caneta
    */
    // public function __construct(){
    //     $this->cor = "Azul";
    //     $this->tampar();
    // }
    
    public function Caneta($m, $c, $p){
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();

    }

    public function tampar(){
        $this->tampada = true;
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getPonta(){
        return $this->ponta; 
    }
    public function setPonta($p){
        $this->ponta = $p;
    }
}