<?php


abstract class TemplateDeImpostoCondicional extends AbstractImposto
{
    public function calcula(Orcamento $orcamento)
    {
        if ($this->deveUsarOMaximo($orcamento)) {
            return $this->taxacaoMaxima($orcamento) + $this->calculaOutroImposto($orcamento);
        }
        return $this->taxacaoMinima($orcamento) + $this->calculaOutroImposto($orcamento);
    }

    protected abstract function deveUsarOMaximo(Orcamento $orcamento);

    protected abstract function taxacaoMinima(Orcamento $orcamento);

    protected abstract function taxacaoMaxima(Orcamento $orcamento);
}