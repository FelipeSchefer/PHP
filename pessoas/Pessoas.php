<?php

class Pessoas{
    //ATRIBUTOS
    private $nome;
    private $idade;
    private $sexo;
    
    //MÉTODOS
    public function fazerAniver(){
        $this->idade++;
    }

    //MÉTODO CONSTRUTOR
    function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    //MÉTODOS ESPECIAIS
    //NOME
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }

    //IDADE
    public function getIdade(){
        return $this->nome;
    }
    public function setIdade($i){
        $this->idade = $i;
    }

    //SEXO
    public function getSexo(){
        return $this->sexo;
    }
    public function setSexo($s){
        $this->sexo = $s;
    }
}