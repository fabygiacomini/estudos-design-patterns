<?php

require_once "../impostos-strategy/Orcamento.php";
require_once "CalculadoraDeDescontos.php";
require_once "Item.php";
require_once "DescontoInterface.php";
require_once "Descontos5Itens.php";
require_once "Desconto500Reais.php";
require_once "Desconto300Reais.php";
require_once "SemDesconto.php";


/**
 * Exemplo de Chain of Responsibility
 * Toda regra de negócio do desconto fica dentro de sue própria classe e
 * a classe de calculadora fica responsável por ordenar essa cadeia de descontos-chain-responsibility.
 * Assim, evitamos uma série de "ifs" para saber qual desconto devemos aplicar, pois
 * se a regra de um desconto não estiver presente para um tipo de desconto específico,
 * a própria classe desse desconto saberá chamar a próxima até encontrar uma que
 * satisfaça a situação (ou não).
 */

$reforma = new Orcamento(301); // alterando o valor para maior 300 ou maior que 500 testamos alguns descontos-chain-responsibility

echo "Testes de descontos-chain-responsibility <br />";

$calculadoraDeDescontos = new CalculadoraDeDescontos();

$reforma->addItem(new Item("Tijolo", 250));
$reforma->addItem(new Item("Cimento 1kg", 250));
$reforma->addItem(new Item("Cimento 1kg", 250));
$reforma->addItem(new Item("Cimento 1kg", 250));
//$reforma->addItem(new Item("Cimento 1kg", 250)); // a quantidade de itens >= 5 testa outro desconto

echo "Desconto: " . $calculadoraDeDescontos->desconto($reforma);
echo "<br />";