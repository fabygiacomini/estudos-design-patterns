<?php


abstract class TemplateDeImpostoCondicional implements ImpostoInterface
{
    public function calcula(Orcamento $orcamento)
    {
        if ($this->deveUsarOMaximo($orcamento)) {
            return $this->taxacaoMaxima($orcamento);
        }
        return $this->taxacaoMinima($orcamento);
    }

    protected abstract function deveUsarOMaximo(Orcamento $orcamento);

    protected abstract function taxacaoMinima(Orcamento $orcamento);

    protected abstract function taxacaoMaxima(Orcamento $orcamento);
}