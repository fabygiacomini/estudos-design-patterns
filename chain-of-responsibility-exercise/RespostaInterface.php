<?php


interface RespostaInterface
{
    public function responde(Requisicao $requisicao, Conta $conta);

    public function setProxima(RespostaInterface $resposta);
}