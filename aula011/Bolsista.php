<?php
require_once 'Aluno.php';
class Bolsista extends Aluno{
    private $bolsa;

    public function renovarBolsa(){
        echo '<p>Bolsa renovada</p>';
    }

    public function pagarMensalidade(){
        echo '<p>' . $this->getNome() . ' paga com disconto!</p>';
    }
    
    // BOLSA 
    public function getBolsa()
    {
        return $this->bolsa;
    }
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
        return $this;
    }
} 