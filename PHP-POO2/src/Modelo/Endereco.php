<?php

namespace Alura\Banco\Modelo;

final class Endereco
{
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function __toString() : string
    {   
        return "End : {$this -> rua} - Nmr º {$this -> numero} , Bairro : {$this -> bairro} , Cidade : {$this -> cidade} " . PHP_EOL;
    }

    public function __get(string $nomeVariavel)
    {
        // UPPER CASE FIRST 
        $metodo = 'recupera' . ucfirst($nomeVariavel);
        return $this -> $metodo()  . PHP_EOL;
    }

    public function __set(string $nomeVariavel, $novoValor)
    {
        return $this -> $nomeVariavel = $novoValor;
    }
}
