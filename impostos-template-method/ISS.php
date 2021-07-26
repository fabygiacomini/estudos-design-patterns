<?php

class ISS extends TemplateDeImpostoCondicional
{
    // condição para sabermos se vai usar o valor máximo ou mínimo (conforme método
    // calcula definido na classe mãe TemplateDeImpostoCondicional)
    protected function deveUsarOMaximo(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 300;
    }

    protected function taxacaoMaxima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.15;
    }

    protected function taxacaoMinima(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }
}