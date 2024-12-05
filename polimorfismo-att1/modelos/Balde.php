<?php

require_once("Produto.php");

class Balde extends Produto
{
    protected $capacidade;
    
    public function __construct($d,$um, $c)
    {
        $this->descricao = $d;
        $this->unidadeMedida = $um;
        $this->capacidade = $c;
    }
    
    public function getDados()
    {
        return "\nDescrição: " . $this->descricao . "\nUnidade de medida: " . $this->unidadeMedida . "\nCapacidade: " . $this->capacidade . "\n";
    }
}