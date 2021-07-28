<?php


class FiltroAberturaMesCorrente extends Filtro
{
    public function __construct($filtro = null)
    {
        parent::__construct($filtro);
    }

    public function filtra($contas)
    {
        $contasFiltradas = [];
        $mesAtual = date('m');

        foreach ($contas as $conta) {
            if (date('m', strtotime($conta->getDataAbertura())) == $mesAtual) {
                $contasFiltradas[] = $conta;
            }
        }
        return array_merge($contasFiltradas, $this->filtraOutroFiltro($contas));
    }
}