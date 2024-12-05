<?php

require_once("Caneta.php");

class CanetaVermelha extends Caneta
{
    public function escrever()
    {
        //sobrescreve o do pai
        print "Caneta está escrevendo vermelho.\n";
    }
    
    public function escreverEspecifico()
    {
        $this->escrever();
    }
    
    public function escreverPai()
    {
        parent::escrever();
    }
}
