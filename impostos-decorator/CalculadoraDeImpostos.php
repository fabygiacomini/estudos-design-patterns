<?php


class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, AbstractImposto $imposto)
    {
        return $imposto->calcula($orcamento);
    }
}