<?php 

require_once("IngressoVIP.php");

class IngressoCamarote extends IngressoVIP
{
    private float $valorAdicionalCamarote = 10.0;

    public function getValorTotal()
    {
        return parent::getValorTotal() + $this->valorAdicionalCamarote;
    }
}