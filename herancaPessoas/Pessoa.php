<?php

class Pessoa{
    private $nome;
    private $idade;
    private $sexo;

    public function fazerAniver(){
        $this->idade++;
    }
    // NOME 
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    // IDADE 
    public function getIdade()
    {
        return $this->idade;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    // SEXO 
    public function getSexo()
    {
        return $this->sexo;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
}

