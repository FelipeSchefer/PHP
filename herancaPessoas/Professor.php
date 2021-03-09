<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
    // ATRIBUTO
    private $especialidade;
    private $salario;

    // MÉTODOS
    public function receberAumento($aumento){
        $this->salario += $aumento;
    }

    // MÉTODOS ESPECIAIS
    // ESPECIALIDADE 
    public function getEspecialidade()
    {
        return $this->especialidade;
    }
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;
    }

    // SALARIO 
    public function getSalario()
    {
        return $this->salario;
    } 
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }
}