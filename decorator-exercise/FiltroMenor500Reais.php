<?php


class FiltroMenor500Reais extends Filtro
{
    public function __construct($filtro = null)
    {
        parent::__construct($filtro);
    }

    public function filtra($contas)
    {
        $contasFiltradas = [];

        foreach ($contas as $conta) {
            if ($conta->getSaldo() < 500) {
                $contasFiltradas[] = $conta;
            }
        }
        return array_merge($contasFiltradas, $this->filtraOutroFiltro($contas));
    }
}