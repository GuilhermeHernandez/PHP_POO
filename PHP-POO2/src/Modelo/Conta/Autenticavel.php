<?php
// INTERFACE É UMA CLASSE ABSTRATA COM TODOS OS METODOS ABSTRATOS
namespace Alura\Banco\Modelo\Conta;

interface Autenticavel
{
    public function podeAutenticar(string $senha) : bool ;

}
?>