<?php

class ISS implements ImpostoInterface
{
    public function calcula(Orcamento $orcamento)
    {
        if ($orcamento->getValor() > 300) {
            return $orcamento->getValor() * 0.15;
        }
        return $orcamento->getValor() * 0.1;
    }
}