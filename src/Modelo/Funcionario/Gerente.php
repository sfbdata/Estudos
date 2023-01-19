<?php

namespace Samuel\Banco\Modelo\Funcionario;
use Samuel\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculabonificacao(): float{
		return $this->getSalario();
	}
	public function podeautenticar(string $senha) {
        return $senha == '1234';
	}
}