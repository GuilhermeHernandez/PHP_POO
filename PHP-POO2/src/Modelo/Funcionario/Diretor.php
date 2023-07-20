<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Conta\Autenticavel;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class Diretor extends Funcionario implements Autenticavel
{
    //BONIFICAÇÃO DO GERENTE É DO SALARIO 2 VEZES
    public function calculaBonificacao() : float
    {
        
        return $this -> recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha) : bool
    {
        return $senha === '1234';
    }
}

?>