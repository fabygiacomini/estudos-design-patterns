<?php


class RelatorioComplexo extends TemplateRelatoriosConta
{
    protected function montaCabecalho()
    {
        return "<h1>Banco Digital S.A.</h1>" .
            "<p>Endereço: Rua ABC, 123, Marília - SP</p>" .
            "<p>Telefone: 14 3333 1111</p>";
    }

    protected function montaRodape()
    {
        return "<footer><p>Email: bancodigitalsa@email.com</p><p>Hora atual: " . date('d/m/Y H:i:s', time()) . "</p></footer>";
    }

    protected function montaLinhas($listaContas)
    {
        $html = "<table><thead><tr>" .
            "<td>Titular</td><td>Agência</td><td>Número da Conta</td><td>Saldo</td>" .
            "</tr></thead><tbody>";

        foreach ($listaContas as $conta) {
            $html .= "<tr><td>{$conta->getTitular()}</td>" .
                "<td>{$conta->getAgencia()}</td>" .
                "<td>{$conta->getConta()}</td>" .
                "<td>{$conta->getSaldo()}</td></tr>";
        }

        $html .= "</tbody></table>";

        return $html;
    }
}