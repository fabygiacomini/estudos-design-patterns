<?php

require_once "RespostaInterface.php";

class SemResposta implements RespostaInterface
{
    public function responde(Requisicao $requisicao, Conta $conta)
    {
        return 'Sem resposta';
    }

    public function setProxima(RespostaInterface $resposta)
    {
    }
}