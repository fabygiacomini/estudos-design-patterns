<?php


// fim da cadeia
class SemDesconto implements DescontoInterface
{
    public function desconto(Orcamento $orcamento)
    {
        return 0;
    }

    public function setProximo(DescontoInterface $desconto)
    {
    }
}