<?php


class Moderado implements ITipoInvestimento
{
    public function calculaRendimento(Investimento $investimento)
    {
        $chance = mt_rand(0, 100);
        if ($chance > 50) {
            return $investimento->getValor() * 0.025;
        } else {
            return $investimento->getValor() * 0.007;
        }
    }
}