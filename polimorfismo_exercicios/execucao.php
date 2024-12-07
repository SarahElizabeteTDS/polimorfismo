<?php

require_once("modelos/IngressoVIP.php");
require_once("modelos/Ingresso.php");
require_once("modelos/IngressoCamarote.php");

$ingressoNormal = new Ingresso();

$ingressoVIP = new IngressoVIP();

$ingressoCamarote = new IngressoCamarote();

print "Valor do Ingresso normal: \n" . $ingressoNormal->getValorTotal() . "\nValor do Ingresso VIP: \n" . $ingressoVIP->getValorTotal() . "\nValor do Ingresso Camarote: \n" . $ingressoCamarote->getValorTotal();