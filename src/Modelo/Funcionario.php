<?php

namespace Samuel\Banco\Modelo;
class Funcionario extends Pessoa
{
    private Pessoa $pessoa;
    private string $cargo;

    
    public function __construct(string $cpf, string $nome, string $cargo) {        
        parent::__construct($cpf, $nome);
    	$this->cargo = $cargo;
    }

	
	public function getCargo() {
		return $this->cargo;
	}	

	public function setCargo($cargo): self {
		$this->cargo = $cargo;
		return $this;
	}
}