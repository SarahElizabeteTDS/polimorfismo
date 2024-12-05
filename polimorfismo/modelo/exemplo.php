<?php

class Exemplo
{
    /*
    public function escreva($v)
    {
        print "Valor: " . $v . "\n";
    }
    
    public function escreva()
    {
        print "Valor: Sem valor\n";
    }
    
    public function escreva($v,$w)
    {
        print "Valores: " . $v . " " . $w . "\n";
    }
    */ //NO PHP NAO FUNCIONA, MAS EM OUTRAS LINGUAGENS ORIENTADAS, SIM
    
    public function escreva($v=null, $w=null)
    {
        if($v == null && $w == null)
        {
            print "Valor: Sem valor\n";
        }
        else if($w == null) 
        {
            print "Valor: " . $v . "\n";
        } 
        else if($v == null) 
        {
            print "Valor: " . $w . "\n";
        } 
        else 
        {
            print "Valores: " . $v . " " . $w . "\n";
        }
        
    }
}