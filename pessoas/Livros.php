<?php
require_once 'Pessoas.php';
require_once 'Publicacao.php';

class Livros implements Publicacao{
    private $titulo;
    private $autor;
    private $totalPag;
    private $pagAtual;
//    private $avancarPag;
    private $aberto;
    private $leitor;

    public function detalhes(){
        echo '<hr>';
        echo ' Livro ' . $this->titulo . " escrito por " . $this->autor;
        echo '<br> Páginas: ' . $this->totalPag;
        echo '<br> Sendo lido por ' . $this->leitor->getNome() . " na página " . $this->pagAtual;
    }

    //MÉTODO CONSTRUTOR
    function __construct($titulo, $autor, $totalPag, $leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalPag = $totalPag;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }

    //MÉTODOS ESPECIAIS
    //TITULO
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    //AUTOR 
    public function getAutor()
    {
        return $this->autor;
    } 
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    //TOTAL DE PAGINAS 
    public function getTotalPag()
    {
        return $this->totalPag;
    }
    public function setTotalPag($totalPag)
    {
        $this->totalPag = $totalPag;
    }

    //PAGINA ATUAL
    public function getPagAtual()
    {
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual =$pagAtual;
    }

    //ABERTO 
    public function getAberto()
    {
        return $this->aberto;
    }
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }

    //LEITOR 
    public function getLeitor()
    {
        return $this->leitor;
    }
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }

    //MÉTODOS ABSTRADOS
    public function abrir(){
        $this->aberto = true;
    }

    public function fechar(){
        $this->aberto = false;
    }

    public function avancarPag(){
        $this->pagAtual++;
    }

    public function voltarPag(){
        $this->pagAtual--;
    }

    public function folhear($pag){
        if ($pag > $this->totalPag){
            $this->pagAtual = 0;
        }
        else{
            $this->pagAtual = $pag;
        }
    }
}
