<?php

// ESSA CLASSE REPRESENTA UMA FUNCIONALIDADE = CLASSE DE SERVIÇO 

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorBonificacao
{
    private int $totalBonificacao = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario){
        $this -> totalBonificacao += $funcionario ->calculaBonificacao();
    }

    public function recuperaTotal() : float
    {
        return $this -> totalBonificacao;
    }
}

?>