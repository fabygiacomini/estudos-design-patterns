<?php

require_once "DescontoInterface.php";

class Desconto500Reais implements DescontoInterface
{
    private $proximoDesconto;

    public function desconto(Orcamento $orcamento)
    {
        if ($orcamento->getValor() > 500) {
            return $orcamento->getValor() * 0.05;

        } else {
            return $this->proximoDesconto->desconto($orcamento);
        }
    }

    public function setProximo(DescontoInterface $desconto)
    {
        $this->proximoDesconto = $desconto;
    }
}