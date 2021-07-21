<?php

require_once "Conta.php";
require_once "ProcessaRequisicao.php";
require_once "Requisicao.php";
require_once "Formato.php";
require_once "RespostaXML.php";


echo 'Testa repostas das requisições <br />';

$conta = new Conta("Fabiana", 3450.90);

$processaRequisicao = new ProcessaRequisicao();

//$requisicao = new Requisicao(Formato::XML);
//$requisicao = new Requisicao(Formato::PORCENTO);
//$requisicao = new Requisicao(Formato::CSV);
$requisicao = new Requisicao(Formato::JSON);
//$requisicao = new Requisicao(7); // sem resposta

echo $processaRequisicao->respondeRequisicao($requisicao, $conta);