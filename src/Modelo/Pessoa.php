<?php

namespace Samuel\Banco\Modelo;

class Pessoa
{
    protected string $cpf;
    protected string $nome;
    
    public function __construct(string $cpf, string $nome) {
    	$this->cpf = $cpf;
		$this->validanome($nome);
    	$this->nome = $nome;
    }
	
	public function getnumero(): string {
		return $this->cpf;
	}
	
	protected function getnome(): string {
		return $this->nome;
	}
	protected function validanome($nome)
	{
		if (strlen($nome) < 3) {
			echo "Precisa ter mais de 3 letras" . PHP_EOL;
			exit();
		}
	}
}