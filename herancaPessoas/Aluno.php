<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    //ATRIBUTOS
    private $matricula;
    private $curso;

    // MÉTODOS
    public function cancelarMatricula($m){
        if ($m == false) {
            $this->matricula ="Aluno não matriculado.";
        }
        else{
            $this->matricula ='Aluno matriculado.';
        }
        //$this->matricula = false;
    }
    
    // MÉTODOS ESPECIAIS
    // MATRICULAR 
    public function getMatricula()
    {
        return $this->matricula;
    }
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    //  CURSO 
    public function getCurso()
    {
        return $this->curso;
    } 
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }
}