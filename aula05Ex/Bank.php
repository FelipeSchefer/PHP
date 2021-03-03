<?php

class Bank{

    /**
     * ATRIBUTOS
     */
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    /**
     * METODO CONSTRUCTOR
     */
    public function __constructor(){
        $this->saldo = setSaldo(0);
        $this->status = setStatus(false);
    }

    /**
     * METODOS
     */
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "CC"){
            $this->setSaldo(50);
        }
        else if($t == "CP"){
            $this->setSaldo(150);
        }
    }
    public function fecharConta(){
        if ($this->getSaldo() > 0) {
            echo "<p>Conta ainda tem dinheiro, não podes fechá-la!</p>";
        }
        else if($this->getSaldo() < 0){
            echo "<p>Conta está em débito. Impossível encerrar!</p>";
        }
        else{
            $this->setStatus(false); 
            echo "<p> Conta de ". $this->getDono() ." fechada com sucesso.</p>";
        }

    }
    public function depositar($v){
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p> Depósito de R$ $v na conta de " . $this->getDono() . " </p>";
        }
        else{
            echo "<p> Conta fechada. Não podes sacar.</p>";
        }
    }
    public function sacar($v){
        if ($this->getStatus()) {
            if ($this->getSaldo() > $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p> Saque de R$ $v autorizado na conta de" . $this->getDono() . "</p>";
            }
            else{
                echo "<p> Saldo insuficiente para saque.</p>";
            }
        }
        else{
            echo "<p> Não podes sacar duma conta fechada.</p>";
        }
    }
    public function pagarMensal(){
        if ($this->getTipo() == "CC") {
            $v = 12;
        }
        else if ($this->getTipo() == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $v);
            echo "<p> Mensalidade de R$ $v debitada na conta de ". $this->getDono() ." </p>";
        }
        else{
            echo "<p> Problemas com a conta. Não poder ser cobrada.</p>";
        }
    }
    
    /**
     * GETTERS & SETTERS
     */
    // CONTA
    public function getNumConta(){
        return $this->numConta;
    }
    public function setNumConta($nc){
        $this->numConta = $nc;
    }

    //TIPO
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }

    //DONO
    public function getDono(){
        return $this->dono;
    }
    public function setDono($d){
        $this->dono = $d;
    }

    //SALDO
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($s){
        $this->saldo = $s;
    }

    //STATUS
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($st){
        $this->status = $st;
    }
}