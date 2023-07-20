<?php


namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    // TIPO 1 == CONTA CORRENTE E 2 == CONTA POUPANÇA
    private $titular;
    protected $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        /*if ($tipo === 1) {
            echo "Conta de {$titular -> recuperaNome()} criada com sucesso ! - Conta Corrente" . PHP_EOL;
        } else {
            echo "Conta de {$titular -> recuperaNome()} criada com sucesso ! - Conta Poupança" . PHP_EOL;
        }*/

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this -> tarifa();

        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
        
        echo "Saque de R$ {$valorASacar} + {$tarifaSaque} (Imposto) , efetuado com sucesso !" . PHP_EOL;
        echo "Total sacado : R$ {$valorSaque}" . PHP_EOL;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    abstract protected function tarifa() : float ;
}
