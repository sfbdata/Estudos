<?php

namespace Samuel\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario 
{
    public function calculabonificacao(): float{
		return 500;
	}

    public function SobeDeNivel(){
        $this->recebeAumento($this->getSalario() * 0.75);
    }
}