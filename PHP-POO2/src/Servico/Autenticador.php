<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Conta\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel,string $senha) : void
    { 
        if($autenticavel ->podeAutenticar($senha))
        {
            echo "Ok. Usuario logado no sistema!";
        } else {
            echo "Senha incorreta !.";
        }

    }
}


?>