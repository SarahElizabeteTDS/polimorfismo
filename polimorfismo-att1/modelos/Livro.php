<?php

require_once("Produto.php");

class Livro extends Produto
{
    protected $autor;
    
    public function __construct($d,$um, $a)
    {
        $this->descricao = $d;
        $this->unidadeMedida = $um;
        $this->autor = $a;
    }
    
    public function getDados()
    {
        return parent::getDados() . "\nAutor: " . $this->autor . "\n";
    }
}