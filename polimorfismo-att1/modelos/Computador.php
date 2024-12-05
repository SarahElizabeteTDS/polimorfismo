<?php

require_once("Produto.php");

class Computador extends Produto
{
    protected $processador;
    protected $memoria;
    
    public function __construct($d,$um, $p, $m)
    {
        $this->descricao = $d;
        $this->unidadeMedida = $um;
        $this->processador = $p;
        $this->memoria = $m;
    }
    
    public function getDados()
    {
        return "\nDescrição: " . $this->descricao . "\nUnidade de medida: " . $this->unidadeMedida . "\nProcessador: " . $this->processador . "\nMemória: " . $this->memoria . "\n";
    }
}