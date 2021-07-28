<?php


class FiltraContas
{
    public function filtra(Filtro $filtro, $contas)
    {
        $contasFiltradas = $filtro->filtra($contas);

        // evita que uma conta apareça mais de uma vez, caso seja selecionada por mais de um filtro
        $contasUnicas = [];
        foreach ($contasFiltradas as $conta) {
            if (!in_array($conta, $contasUnicas)) {
                $contasUnicas[] = $conta;
            }
        }
        return $contasUnicas;
    }
}