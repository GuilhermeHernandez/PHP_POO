<?php


//SEPARAÇÃO LOGICA , BASICAMENTE SE ENCONTRA NA PASTA MODELO
namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\CPF;

abstract class Pessoa
{
    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }
    
    // NÃO PODE SOBREESCREVER O METODO
    final protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
