<?php

require_once("modelos/Midia.php");
require_once("modelos/Cd.php");
require_once("modelos/Dvd.php");

$array = array();

for ($i=0; $i < 5; $i++) 
{ 
    print "Qual o tipo de mídia?\n1-Genérica\n2-CD\n3-DVD\n";
    $tipo = readline();

    if ($tipo == 1) 
    {
        $midia = new Midia(readline("Escreva a descrição: "), readline("Qual foi o preço: "));
        array_push($array, $midia);
    }else if($tipo == 2)
    {
        $cd = new CD(readline("Escreva a descrição: "), readline("Qual foi o preço: "));
        array_push($array, $cd);
    }else if($tipo == 3)
    {
        $dvd = new DVD(readline("Escreva a descrição: "), readline("Qual foi o preço: "));
        array_push($array, $dvd);
    }else
    {
        print "Valor inválido";
    }
}

foreach ($array as $midia) 
{
    print $midia->getTipo() . $midia->getDados() . "\n";
}

