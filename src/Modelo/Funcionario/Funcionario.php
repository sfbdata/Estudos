<?php

namespace Samuel\Banco\Modelo\Funcionario;
use Samuel\Banco\Modelo\Pessoa;



abstract class Funcionario extends Pessoa
{
	private float $salario;

    
    public function __construct(string $nome, string $cpf, float $salario) {        
        parent::__construct($nome,$cpf);
		$this->salario = $salario;
    }

	  
	public function getSalario(): float {
		return $this->salario;
	}

	public function recebeAumento(float $valoraumento){
		if ($valoraumento < 0) {
			echo "Aumento deve ser positivo";
			return;
		}
		$this->salario += $valoraumento;
	}

}