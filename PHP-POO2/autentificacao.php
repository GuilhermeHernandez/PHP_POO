<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Gerente;
use Alura\Banco\Servico\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$user = new Gerente('Guilherme Hernandez',new CPF('123.456.789-01'),100000);

$autenticador ->tentaLogin($user,'4321');

?>