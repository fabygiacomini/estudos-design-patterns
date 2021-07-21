<?php

require_once "DescontoInterface.php";

class Descontos5Itens implements DescontoInterface
{
    private $proximoDesconto;

    public function desconto(Orcamento $orcamento)
    {
        if (count($orcamento->getItens()) >= 5) {
            return $orcamento->getValor() * 0.1;
        } else {
            return $this->proximoDesconto->desconto($orcamento);
        }
    }

    public function setProximo(DescontoInterface $desconto)
    {
        $this->proximoDesconto = $desconto;
    }
}