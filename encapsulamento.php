<?php

class Conta
{
   
    public $saldo;

    public function __construct()
    {
        $this->saldo=30;
    }
    
    public function deposito($dinheiro)
    {
         $this->saldo += $dinheiro;
    }

    public function saque($dinheiro)
    {
       if($dinheiro > $this->saldo)
       return 'Valor indisponível. ';
        return  $this->saldo -= $dinheiro;
    }

}

$saldoConta = new Conta();

$saldoConta->deposito(3);


print $saldoConta->saldo;
print "----------------";
$saldoConta->saque(2);
print $saldoConta->saldo;



