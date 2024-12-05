<?php

class Produto
{
    protected $descricao;
    protected $unidadeMedida;
    
    public function __construct($d,$um)
    {
        $this->descricao = $d;
        $this->unidadeMedida = $um;
    }
    
    public function getDados()
    {
        return "\nDescrição: " . $this->descricao . "\nUnidade de medida: " . $this->unidadeMedida . "\n";
    }
}