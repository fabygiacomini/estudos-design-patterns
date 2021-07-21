<?php

require "ITipoInvestimento.php";
require "Investimento.php";
require "CalculadoraInvestimento.php";
require "Conservador.php";
require "Moderado.php";
require "Arrojado.php";

    $quebraLinha = '<br />';

    $investimento = new Investimento(1000);
    $calculadora = new CalculadoraInvestimento();

    echo 'Saldo investido: ' . $investimento->getValor();
    echo $quebraLinha;

    echo 'Saldo em investimento do tipo "Conservador": ' . $calculadora->calculaSaldo($investimento, new Conservador());
    echo $quebraLinha;

    echo 'Saldo em investimento do tipo "Moderado":' . $calculadora->calculaSaldo($investimento, new Moderado());
    echo $quebraLinha;

    echo 'Saldo em investimento do tipo "Arrojado":'  . $calculadora->calculaSaldo($investimento, new Arrojado());

