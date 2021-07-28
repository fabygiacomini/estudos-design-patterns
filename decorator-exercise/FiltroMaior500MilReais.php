<?php


class FiltroMaior500MilReais extends Filtro
{
    public function __construct($filtro = null)
    {
        parent::__construct($filtro);
    }

    public function filtra($contas)
    {
        $contasFiltradas = [];

        foreach ($contas as $conta) {
            if ($conta->getSaldo() > 500000) {
                $contasFiltradas[] = $conta;
            }
        }
        return array_merge($contasFiltradas, $this->filtraOutroFiltro($contas));
    }
}