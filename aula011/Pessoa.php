<?php

abstract class Pessoa{
    private $nome;
    private $idade;
    private $sexo;

    public final function fazerAniversario(){
        $this->idade = $idade++;
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
}