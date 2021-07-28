<?php


abstract class Filtro
{
    protected $outroFiltro;

    function __construct($filtro = null)
    {
        $this->outroFiltro = $filtro;
    }

    public abstract function filtra($contas);

    public function filtraOutroFiltro($contas)
    {
        if (is_null($this->outroFiltro)) {
            return [];
        }
        return $this->outroFiltro->filtra($contas);
    }
}