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

    public abstract function deveUsarOMaximo(Orcamento $orcamento);

    public abstract function taxacaoMinima(Orcamento $orcamento);

    public abstract function taxacaoMaxima(Orcamento $orcamento);
}