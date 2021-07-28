<?php

class ICMS extends TemplateDeImpostoCondicional
{
    function __construct($imposto = null)
    {
        parent::__construct($imposto);
    }

    protected function deveUsarOMaximo(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 500;
    }

    protected function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.15;
    }

    protected function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.05;
    }
}