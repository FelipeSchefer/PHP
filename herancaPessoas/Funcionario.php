<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa{
    // ATRIBUTO
    private $setor;
    private $trabalhando;

    // MÉTODO
    public function mudarTrabalho($outroSetor){
        if ($outroSetor != "") {
            $this->trabalhando = "Ele/ela está trocando de ". $this->getSetor() ." para " . $outroSetor;
        }
        else {
            $this->trabalhando = "Não está em processo de mudança de trabalho";
        }
    }

    // MÉTODOS ESPECIAIS
    // SETOR 
    public function getSetor()
    {
        return $this->setor;
    }
    public function setSetor($setor)
    {
        $this->setor = $setor;
    }

    // TRABALHANDO 
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }
    public function setTrabalhando($trabalhando)
    {
        if ($trabalhando == true) {
            $this->trabalhando = "Sim";
        }
        else {
            $this->trabalhando = "Não";
        }
    }
}