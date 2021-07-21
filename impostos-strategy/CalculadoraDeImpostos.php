<?php


class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, ImpostoInterface $imposto)
    {
        return $imposto->calcula($orcamento);
    }
}