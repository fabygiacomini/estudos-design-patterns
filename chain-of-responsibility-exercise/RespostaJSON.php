<?php


class RespostaJSON implements RespostaInterface
{
    private $proximaResposta;

    public function responde(Requisicao $requisicao, Conta $conta)
    {
        if ($requisicao->getFormato() == Formato::JSON) {
            return json_encode(['titular' => $conta->getTitular(), 'saldo' => $conta->getSaldo()]);
        }

        return $this->proximaResposta->responde($requisicao, $conta);
    }

    public function setProxima(RespostaInterface $resposta)
    {
        $this->proximaResposta = $resposta;
    }
}