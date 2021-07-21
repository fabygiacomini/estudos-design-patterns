<?php

require_once "RespostaInterface.php";

class RespostaXML implements RespostaInterface
{
    private $proximaResposta;

    public function responde(Requisicao $requisicao, Conta $conta)
    {
        if ($requisicao->getFormato() == Formato::XML) {
            return "<conta><titular>{$conta->getTitular()}</titular><saldo>{$conta->getSaldo()}</saldo></conta>";
        }

        return $this->proximaResposta->responde($requisicao, $conta);
    }

    public function setProxima(RespostaInterface $resposta)
    {
        $this->proximaResposta = $resposta;
    }
}