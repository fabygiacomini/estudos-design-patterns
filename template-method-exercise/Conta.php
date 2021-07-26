<?php


class Conta
{
    private $titular;
    private $conta;
    private $saldo;
    private $agencia;

    function __construct($titular, $agencia, $conta, $saldo)
    {
        $this->titular = $titular;
        $this->agencia = $agencia;
        $this->conta = $conta;
        $this->saldo = $saldo;
    }

    public function getTitular()
    {
        return $this->titular;
    }

    public function getAgencia()
    {
        return $this->agencia;
    }

    public function getConta()
    {
        return $this->conta;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

}