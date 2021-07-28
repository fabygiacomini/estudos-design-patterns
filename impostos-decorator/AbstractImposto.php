<?php


abstract class AbstractImposto
{
    protected $outroImposto;

    function __construct($imposto = null)
    {
        $this->outroImposto = $imposto;
    }

    public function calculaOutroImposto(Orcamento $orcamento)
    {
        if (is_null($this->outroImposto)) return 0;
        return $this->outroImposto->calcula($orcamento);
    }

    public abstract function calcula(Orcamento $orcamento);
}