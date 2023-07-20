<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('São paulo','Vila Primavera','Alvaro Moreira','56');

echo $umEndereco;
echo $umEndereco -> bairro;

$umEndereco -> bairro = 'Vila vintem';
echo $umEndereco -> bairro;

?>