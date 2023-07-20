<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Autenticavel;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class Gerente extends Funcionario implements Autenticavel
{
    //BONIFICAÇÃO DO GERENTE É DO SALARIO INTEIRO
    public function calculaBonificacao() : float
    {
        return $this -> recuperaSalario();
    }

    public function podeAutenticar(string $senha) : bool
    {
        return $senha === '4321';
    }
}


?>