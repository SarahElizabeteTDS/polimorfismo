<?php  

require_once("modelos/Produto.php");
require_once("modelos/Computador.php");
require_once("modelos/Livro.php");
require_once("modelos/Balde.php");

$produto = new Produto("Não há descrição específica","Quantidade");
print $produto->getDados();

$computador = new Computador("É um computador", "Computadores", "Intel Core i7-9900K", "32GB RAM");
print $computador->getDados();

$livro = new Livro("É um livro", "Livros", "Jorge Amado");
print $livro->getDados();

$balde = new Balde("É um balde", "Baldes", "20L");
print $balde->getDados();
