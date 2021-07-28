<?php

require_once "../impostos-strategy/Orcamento.php";
require_once "AbstractImposto.php";
require_once "TemplateDeImpostoCondicional.php";
require_once "CalculadoraDeImpostos.php";
require_once "ICMS.php";
require_once "ISS.php";

/**
 * Exemplo do pattern Decorator, usado nos casos em que queremos
 * fazer uma composição de comportamentos de mais de um objeto (passando, por exemplo,
 * uma instância de um objeto no construtor da outra, sendo que estes objetos são do mesmo tipo -
 * neste exemplo, tanto ICMS quanto ISS são AbstractImposto)
 */

echo "Testes de impostos-decorator<br />";

$reforma = new Orcamento(490);

$calculadora = new CalculadoraDeImpostos();

echo $calculadora->calcula($reforma, new ICMS());

echo "<br />";

echo $calculadora->calcula($reforma, new ISS());

echo "<br />";

echo $calculadora->calcula($reforma, new ICMS(new ISS())); // soma dos dois anteriores