<?php

require_once("modelos/Caneta.php");
require_once("modelos/CanetaAzul.php");

$caneta1 = new Caneta;
$caneta1->escrever();

$canetaAzul1 = new CanetaAzul;
$canetaAzul1->escrever();

$canetaVermelha1 = new CanetaVermelha;
$canetaVermelha1->escrever();