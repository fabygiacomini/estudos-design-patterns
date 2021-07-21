<?php


class Desconto300Reais implements DescontoInterface
{
    private $proximoDesconto;

    public function desconto(Orcamento $orcamento)
    {
        if ($orcamento->getValor() > 300) {
            return $orcamento->getValor() * 0.01;
        } else {
            return $this->proximoDesconto->desconto($orcamento);
        }
    }

    public function setProximo(DescontoInterface $desconto)
    {
       $this->proximoDesconto = $desconto;
    }
}