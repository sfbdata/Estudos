<?php

namespace Samuel\Banco\Service;

use Samuel\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculabonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }

}






namespace Samuel\Banco\Modelo\Service;

use Samuel\Banco\Modelo\Funcionario;

class ControladorDeBonificacoes
{
    private float $totalBonificacao = 0;
    public function adicionaBonificacaoDe(Funcionario $funcionario) {
        $this->totalBonificacao += $funcionario->recuperabonificacao();
    }
	public function getTotalBonificacao(): float {
		return $this->totalBonificacao;
	}
}