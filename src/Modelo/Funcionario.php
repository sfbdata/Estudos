<?php

namespace Samuel\Banco\Modelo;


class Funcionario extends Pessoa
{

    private string $cargo;
	private float $salario;

    
    public function __construct(string $nome, string $cpf, string $cargo, float $salario) {        
        parent::__construct($nome,$cpf);
    	$this->cargo = $cargo;
		$this->salario = $salario;
    }

	public function getCargo() {
		return $this->cargo;
	}	  
	public function getSalario(): float {
		return $this->salario;
	}
	public function calculabonificacao(): float{
		return $this->salario * 0.01;
	}

}