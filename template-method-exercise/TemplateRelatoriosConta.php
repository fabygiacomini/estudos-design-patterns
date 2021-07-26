<?php


abstract class TemplateRelatoriosConta implements RelatorioInterface
{
    public function geraRelatorio($listaContas)
    {
        return
            "<DOCTYPE html><title>Relatório de Contas</title>" .
                "<head><header>" . $this->montaCabecalho() . "</header></head>" .
                "<body>" . $this->montaLinhas($listaContas) . "</body>" .
                "<footer>" . $this->montaRodape() . "</footer>";
    }

    protected abstract function montaCabecalho();
    protected abstract function montaLinhas($listaContas);
    protected abstract function montaRodape();
}