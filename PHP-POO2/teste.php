<?php

use Alura\Banco\Modelo\Conta\{Conta,ContaPoupanca,ContaCorrente,Titular};
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta_ = new ContaPoupanca(new Titular(new CPF('123.456.789-01'),'Ingrid Araujo',new Endereco('São Paulo','Primavera','Rua 1','S/N')));
$conta = new ContaCorrente(new Titular(new CPF('123.456.789-02'),'Guilherme Hernandez',new Endereco('São Paulo','VP','Rua 0','123')));


$conta -> depositar(500);
$conta -> sacar(100);

$conta_ -> recuperaSaldo();

?>