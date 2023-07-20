<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{
    //BONIFICAÇÃO DO GERENTE É DO SALARIO INTEIRO
    public function calculaBonificacao() : float
    {
        return $this -> recuperaSalario() + 500;
    }

    public function sobeDeNivel()
    {
        $this -> recebeAumento($this -> recuperaSalario() * 0.75);
    }
}


?>