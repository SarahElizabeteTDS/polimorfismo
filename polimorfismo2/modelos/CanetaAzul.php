<?php 

require_once("Caneta.php");

class CanetaAzul extends Caneta
{
    public function escrever()
    {
        //metodo sobrescreve o metodo do pai
        print "Caneta está escrevendo azul.\n";
    }
}