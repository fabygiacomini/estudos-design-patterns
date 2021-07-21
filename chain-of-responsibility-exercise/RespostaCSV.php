<?php


class RespostaCSV implements RespostaInterface
{
    private $proximaResposta;

    public function responde(Requisicao $requisicao, Conta $conta)
    {
        if ($requisicao->getFormato() == Formato::CSV) {
            return $conta->getTitular() . ';' . $conta->getSaldo();
        }

        return $this->proximaResposta->responde($requisicao, $conta);
    }

    public function setProxima(RespostaInterface $resposta)
    {
        $this->proximaResposta = $resposta;
    }
}