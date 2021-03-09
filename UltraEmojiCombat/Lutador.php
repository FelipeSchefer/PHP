<?php
class Lutador{
    //ATRIBUTOS
    private $nome, $nacionalidade;
    private $idade, $altura, $peso;
    private $categoria, $vitorias, $derrotas, $empates;

    //METODOS
    function apresentar(){
        echo "<hr>";
        echo "<p> CHEGOU A HORA! O lutador " . $this->getNome() . " </p>";
        echo "vindo direto de " . $this->getNacionalidade() . "<br>";
        echo "tem " . $this->getIdade() .  " anos e pesa " . $this->getPeso() . " peso. <br>";
        echo "Ele tem " . $this->getVitorias() . " vitorias e " . $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates.";

    }
    function status(){
        echo "<hr>";
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Categoria: " . $this->getCategoria() . " com " . $this->getPeso() . " quilos<br>";
        echo "Vitorias: " . $this->getVitorias() . "<br>";
        echo "Derrotas: " . $this->getDerrotas() . "<br>";
        echo "Empates: " . $this->getEmpates();
    }
    function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

    //METODOS ESPECIAIS
    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em ){
        $this->nome  = $no;        
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    
    //NOME
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
 
    //NACIONAIDADE
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;

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

    //ALTURA
    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    //PESO
    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();        
    }
 
    //CATEGORIA
    public function getCategoria()
    {
        return $this->categoria;
    }
 
    private function setCategoria()
    {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválida";
        }
        elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        }
        elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        }
        elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        }
        else {
            $this->categoria = "Inválido";
        }
    }

    // VITORIA 
    public function getVitorias()
    {
        return $this->vitorias;
    }
 
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;

        return $this;
    }

    //DERROTAS
    public function getDerrotas()
    {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;

        return $this;
    }

    //EMPATES
    public function getEmpates()
    {
        return $this->empates;
    }
 
    public function setEmpates($empates)
    {
        $this->empates = $empates;

        return $this;
    }


}