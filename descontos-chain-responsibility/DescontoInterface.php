<?php


interface DescontoInterface
{
    public function desconto(Orcamento $orcamento);
    public function setProximo(DescontoInterface $desconto);
}