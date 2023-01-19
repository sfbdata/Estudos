<?php

namespace Samuel\Banco\Modelo\Funcionario;


class Diretor extends Funcionario
{
    public function calculabonificacao(): float{
		return $this->getSalario()*2;
	}

    public function podeautenticar(string $senha): float{
        return $senha == '1234';
    }
}
