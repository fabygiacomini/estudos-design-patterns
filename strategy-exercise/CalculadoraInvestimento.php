<?php


class CalculadoraInvestimento
{
    public function calculaSaldo(Investimento $investimento, ITipoInvestimento $tipoInvestimento)
    {
        return $investimento->getValor() + $tipoInvestimento->calculaRendimento($investimento) * 0.75;
    }
}