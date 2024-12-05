<?php

class Midia
{
    protected $descricao;
    protected $precoPago;
    
    public function __construct($d, $pp)
    {
        $this->descricao = $d;
        $this->precoPago = $pp;
    }
    
    public function getDados()
    {
        return "Descrição: " . $this->descricao . "\nPreço pago: " . $this->precoPago . "\n";
    }
    
    public function getTipo()
    {
        return "Genérico";
    }
}