<?php

require_once "Descontos5Itens.php";
require_once "Desconto500Reais.php";
require_once "Desconto300Reais.php";
require_once "SemDesconto.php";

// responsável por montar a cadeia
class CalculadoraDeDescontos
{
    public function desconto(Orcamento $orcamento)
    {
        $desconto5Itens = new Descontos5Itens();
        $desconto500Reais = new Desconto500Reais();
        $desconto300Reais = new Desconto300Reais();
        $semDesconto = new SemDesconto();

        $desconto5Itens->setProximo($desconto500Reais);
        $desconto500Reais->setProximo($desconto300Reais);
        $desconto300Reais->setProximo($semDesconto);


        // precisamos apenas chamar o método desconto da primeira classe da cadeia
        // e ela já vai chamando a próxima
        $valorDesconto = $desconto5Itens->desconto($orcamento);

        return $valorDesconto;
    }
}