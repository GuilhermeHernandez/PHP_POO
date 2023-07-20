<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{CPF,Pessoa};

abstract class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, CPF $cpf,float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario() : float 
    {
        return $this-> salario;
    }

    abstract public function calculaBonificacao() : float ;


    public function recebeAumento(float $valorAumento) : void
    {
        if($valorAumento < 0){
            echo "Aumento deve ser positivo!";
            return ; 
        }

        $this -> salario += $valorAumento;
    }
}
