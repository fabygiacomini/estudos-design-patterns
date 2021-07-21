<?php


class Conservador implements ITipoInvestimento
{
    public function calculaRendimento(Investimento $investimento)
    {
        return $investimento->getValor() * 0.008;
    }
}