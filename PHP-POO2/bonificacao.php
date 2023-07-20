<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor,Diretor,Gerente};
use Alura\Banco\Servico\ControladorBonificacao;

$doisfunc = new Desenvolvedor('Ingrid Araujo',new CPF('123.456.789-02'),3000);

$doisfunc ->sobeDeNivel();

$tresfunc = new Diretor('Luana Carolina',new CPF('123.456.789-03'),5000);
$quatrofunc = new Desenvolvedor('Luana Carolina',new CPF('123.456.789-03'),5000);

$controlador = new ControladorBonificacao();
$controlador ->adicionaBonificacaoDe($doisfunc);
$controlador ->adicionaBonificacaoDe($tresfunc);
$controlador ->adicionaBonificacaoDe($quatrofunc);



echo $controlador ->recuperaTotal();

?>