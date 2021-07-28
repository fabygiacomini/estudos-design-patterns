<?php

require_once "Conta.php";
require_once "FiltraContas.php";
require_once "Filtro.php";
require_once "FiltroMenor500Reais.php";
require_once "FiltroMaior500MilReais.php";
require_once "FiltroAberturaMesCorrente.php";

$contas = [];
$conta1 = new Conta('Fabiana', 567987, date('Y-m-d', strtotime('yesterday')));
$conta2 = new Conta('Zelda', 456, date('Y-m-d', strtotime('-2 Months')));
$conta3 = new Conta('Darwin', 479, date('Y-m-d', strtotime('today')));
$conta4 = new Conta('Leo', 4690, date('Y-m-d', strtotime('2021-07-12')));
$conta5 = new Conta('Sheldon', 6789, date('Y-m-d', strtotime('2021-03-01'))); // nõa passa por nenhum filtro

$contas[] = $conta1;
$contas[] = $conta2;
$contas[] = $conta3;
$contas[] = $conta4;
$contas[] = $conta5;

$filtragem = new FiltraContas();
$contasFiltradas = $filtragem->filtra(new FiltroMenor500Reais(new FiltroMaior500MilReais(new FiltroAberturaMesCorrente())), $contas);

echo '<pre />';
var_dump($contasFiltradas);