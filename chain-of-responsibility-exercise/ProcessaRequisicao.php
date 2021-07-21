<?php

require_once "RespostaXML.php";
require_once "RespostaPorcento.php";
require_once "RespostaCSV.php";
require_once "RespostaJSON.php";
require_once "SemResposta.php";

class ProcessaRequisicao
{
    public function respondeRequisicao(Requisicao $requisicao, Conta $conta)
    {
        $respostaXML = new RespostaXML();
        $respostaPorcento = new RespostaPorcento();
        $respostaCSV = new RespostaCSV();
        $respostaJSON = new RespostaJSON();
        $semResposta = new SemResposta();

        $respostaXML->setProxima($respostaPorcento);
        $respostaPorcento->setProxima($respostaCSV);
        $respostaCSV->setProxima($respostaJSON);
        $respostaJSON->setProxima($semResposta);

        // chamamos a primeira da cadeia
        return $respostaXML->responde($requisicao, $conta);
    }
}