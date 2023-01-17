<?php

namespace Samuel\Banco\Modelo\Conta;



class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float {
        return 0.5;
    }

    public function transferir(float $valoratransferir, Conta $conta): void {
        if ($valoratransferir > $this->saldo) {
            echo "não possui saldo, seu pobre!!" . PHP_EOL;
            return;
        }
        $this->sacar($valoratransferir);
        $conta->depositar($valoratransferir);
    }

}