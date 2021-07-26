<?php

require_once "Conta.php";
require_once "RelatorioInterface.php";
require_once "TemplateRelatoriosConta.php";
require_once "RelatorioSimples.php";
require_once "RelatorioComplexo.php";


$listaContas = [];

$conta1 = new Conta('Fabiana', 12, 1234, 3590.90);
$conta2 = new Conta('Zelda', 11, 2017, 12345.00);
$conta3 = new Conta('Darwin', 12, 1959, 4567.90);
$conta4 = new Conta('Leo', 10, 4321, 15678.90);

$listaContas[] = $conta1;
$listaContas[] = $conta2;
$listaContas[] = $conta3;
$listaContas[] = $conta4;

//$relatorio = new RelatorioSimples();
$relatorio = new RelatorioComplexo();

echo '<pre>' . $relatorio->geraRelatorio($listaContas);