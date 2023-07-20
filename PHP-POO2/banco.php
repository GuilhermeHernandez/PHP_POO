<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Conta,Titular};
use Alura\Banco\Modelo\{Endereco,CPF};

$Guilherme = new Titular(new CPF('123.456.789-01'), 'Guilherme Hernandez Batista', new Endereco('São Paulo', 'Primaveira', 'Rua 157', '1533'));
$primeiraConta = new Conta($Guilherme);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', new Endereco('Rio de Janeiro', 'Copacabana', 'Posto 9', 'S/N'));
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outroEndereco = new Endereco('A', 'b', 'c', '1D');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));