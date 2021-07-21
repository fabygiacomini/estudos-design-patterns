<?php


class Arrojado implements ITipoInvestimento
{
    public function calculaRendimento(Investimento $investimento)
    {
        $chance = mt_rand(0, 100);

        if ($chance <= 20) {
            return $investimento->getValor() * 0.05;
        }

        if ($chance > 20 && $chance <= 50) {
            return $investimento->getValor() * 0.03;
        }

        return $investimento->getValor() * 0.006;
    }
}