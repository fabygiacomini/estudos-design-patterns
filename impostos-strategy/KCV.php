<?php

class KCV implements ImpostoInterface
{
    public function calcula(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.2;
    }
}