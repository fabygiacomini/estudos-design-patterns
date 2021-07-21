<?php

class ICMS implements ImpostoInterface
{
    public function calcula(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.05;
    }
}