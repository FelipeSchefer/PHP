<?php
abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    protected function ganharEx($n){
        $this->experiencia += $n;
    }

    // EXPERIENCIA 
    public function __construct($nome, $idade, $sexo, $experiencia){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;        
    }

    // NOME
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    // IDADE 
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    // SEXO 
    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }

    // EXPERIENCIA 
    // public function getExperiencia()
    // {
    //     return $this->experiencia;
    // }
    // public function setExperiencia($experiencia)
    // {
    //     $this->experiencia = $experiencia;
    //     return $this;
    // }
}