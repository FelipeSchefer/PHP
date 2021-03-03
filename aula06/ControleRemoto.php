<?php
require_once 'Controlador.php';
class ControleRemoto{
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;

    //Metodos especiais
    public function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    // VOLUME
    private function getVolume(){
        return $this->volume;
    }
    private function setVolume($volume){
        $this->volume = $volume;
    }

    //LIGADO
    private function getLigado(){
        return $this->ligado;
    }
    private function setLigado($ligado){
        $this->ligado = $ligado;
    }

    //TOCANDO 
    private function getTocando(){
        return $this->tocando;
    }
    private function setTocando($tocando){
        $this->tocando = $tocando;
    }

    //METODOS ABSTRADOS DO CONTROLADOR.PHP
    
    //LIGAR E DESLIGAR
    public  function ligar(){
        $this->setLigado(true);
    }
    public  function desligar(){
        $this->setLigado(false);
    }

    //ABRIR MENU E FECHAR MENU
    public  function abrirMenu(){
        echo "<h5>---------- MENU ----------</h5>";
        echo "<br>Está ligado? " . ($this->getLigado()? "SIM" : "NÃO");
        echo "<br>Está tocando? " . ($this->getTocando()? "SIM" : "NÃO");
        echo "<br>Volume: " . $this->getVolume();
        

        for($i=0; $i <= $this->getVolume(); $i+=10 ){
            echo "|";
        }
        echo "<h5>----------------------------</h5>";
        echo "<br>";
    }
    public  function fecharMenu(){
        echo "<br>Fechando Menu... ";
    }

    //MAIS VOLUME E MENOS VOLUME
    public  function maisVolume(){
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }
    }
    public  function menosVolume(){
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }
    }

    //LIGAR MUDO E DESLIAR MUDO
    public  function ligarMudo(){
        if ($this->getLigado() && $this->getVolume()>0) {
            $this->setVolume(0);
        }
    }
    public function desligarMudo(){
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    //PLAY E PAUSE
    public  function play(){
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }
    public  function pause(){
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
            
        }
    }
}










