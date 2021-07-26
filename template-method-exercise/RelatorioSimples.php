<?php


class RelatorioSimples extends TemplateRelatoriosConta
{
    protected function montaCabecalho()
    {
        return "<h1>Banco Digital S.A.</h1>";
    }

    protected function montaRodape()
    {
        return "Telefone: 14 3333 1111";
    }

    protected function montaLinhas($listaContas)
    {
        $html = "<table><thead><tr><td>Titular</td><td>Saldo</td></tr></thead><tbody>";

        foreach ($listaContas as $conta) {
            $html .= "<tr><td>{$conta->getTitular()}</td><td>{$conta->getSaldo()}</td></tr>";
        }

        $html .= "</tbody></table>";

        return $html;
    }
}