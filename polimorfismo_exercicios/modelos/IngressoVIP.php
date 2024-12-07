<?php 

require_once("Ingresso.php");

class IngressoVIP extends Ingresso
{
    private float $valorAdicional = 5.0;

    public function getValorTotal()
    {
        return parent::getValorTotal() + $this->valorAdicional;
    }
}