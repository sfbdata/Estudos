<?php

namespace Samuel\Banco\Modelo\Conta;
abstract class Conta
{
    private Titular $titular;
    protected int $saldo = 0;
    private static $contas = 0;

    public function __construct(Titular $titular) {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$contas++;
    }
    public function __destruct() {
        self::$contas;
    }
    

    public function getsaldo(): string {
        return $this->saldo;
    }
    
    public function sacar(float $valorasacar): void {
            
        $tarifasaque = $valorasacar * $this->percentualTarifa();
        $valorSaque = $valorasacar + $tarifasaque;

        if ($valorSaque > $this->saldo) {
            echo "Não possui saldo" . PHP_EOL;
            return;
        }
        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valoradepositar): void {
        if ($valoradepositar <= 0) {
            "Valor a depositar deve ser maior que 0, sua anta!!" . PHP_EOL;
            return;
        }
        $this->saldo += $valoradepositar;
    }

    public static function getcontas(): int {
        echo "Total de contas: ";
        return self::$contas;
    }

    public function nome(): string {
        return $this->titular->nome();
    }

    public function cpf(): string {
        return $this->titular->cpf();
    }
    
    abstract protected function percentualTarifa(): float;
   
}
