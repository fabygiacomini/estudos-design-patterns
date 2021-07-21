<?php

require "ImpostoInterface.php";
require "Orcamento.php";
require "CalculadoraDeImpostos.php";
require "ICMS.php";
require "ISS.php";
require "KCV.php";
require "ICCC.php";

    /**
     * Exemplo de Strategy Pattern
     * Isolamos as regras dos cálculos dentro das classes de impostos-strategy, criadas com base em uma interface que obriga
     * que se tenha o método `calcula()` o qual calulará a incidência do imposto.
     * Assim, evitamos ter uma classe com um método para cada tipo de imposto com com muitos "ifs".
     */
    echo "Testes de impostos-strategy<br />";

    $reforma = new Orcamento(300);

    $calculadora = new CalculadoraDeImpostos();

    echo $calculadora->calcula($reforma, new ICMS());

    echo "<br />";

    echo $calculadora->calcula($reforma, new ISS());

    echo "<br />";

    echo $calculadora->calcula($reforma, new KCV());

    echo "<br />";
    echo "<br />";

    $reformaRancho = new Orcamento(3000);
    echo $calculadora->calcula($reformaRancho, new ICCC());
    echo "<br />";

    $consertoPC = new Orcamento(860);
    echo $calculadora->calcula($consertoPC, new ICCC());
    echo "<br />";

    $consertoPortao = new Orcamento(4500);
    echo $calculadora->calcula($consertoPortao, new ICCC());
    echo "<br />";
    echo "<br />";