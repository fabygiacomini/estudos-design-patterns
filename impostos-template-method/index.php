<?php

require "../impostos-strategy/ImpostoInterface.php";
require "TemplateDeImpostoCondicional.php";
require "../impostos-strategy/Orcamento.php";
require "../impostos-strategy/CalculadoraDeImpostos.php";
require "ICMS.php";
require "ISS.php";


    /**
     * Exemplo de Template Method
     * Usamos um "molde" de template para método de um algoritmo, por isso esse design patterns chama-se
     * Template Method.
     * No exemplo, o algoritmo está contido na classe TemplateDeImpostoCondicional, sendo que ali fica a lógica
     * e as demais classes que a estendem apenas preenchem os métodos com as suas regras (condição
     * de uso do valor máximo e mínimo e seus respectivos valores).
     */
    echo "Testes de impostos-template-method<br />";

    $reforma = new Orcamento(250);

    $calculadora = new CalculadoraDeImpostos();

    echo $calculadora->calcula($reforma, new ICMS());

    echo "<br />";

    echo $calculadora->calcula($reforma, new ISS());

    echo "<br />";

