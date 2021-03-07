<?php
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{
    private $login;    
    private $totalAssistido;

    public function viuMaisUm(){
        $this->totalAssistido++;
    }

    public function __construct($nome, $idade, $sexo, $login){
        parent::__construct($nome, $idade, $sexo, $login);
        $this->login = $login;
        $this->totalAssistido = 0;
    }
    

    // LOGIN
    public function getLogin()
    {
        return $this->login;
    } 
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

    // TOTAL DE VIDEOS ASSISTIDOS
    public function getTotalAssistido()
    {
        return $this->totalAssistido;
    }
    public function setTotalAssistido($totalAssistido)
    {
        $this->totalAssistido = $totalAssistido;
        return $this;
    }
}