<?php

namespace Samuel\Banco\Modelo;

class Endereco
{
    private string $estado;
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $casa;

   
    public function __construct(string $estado, string $cidade, string $bairro, string $rua, string $casa) {
    	$this->estado = $estado;
    	$this->cidade = $cidade;
    	$this->bairro = $bairro;
    	$this->rua = $rua;
    	$this->casa = $casa;
    }

	public function getEstado(): string {
		return $this->estado;
	}	
	
	public function setEstado(): string {
		return $this->estado;		
	}
	
	public function getCidade(): string {
		return $this->cidade;
	}
	
	public function setCidade(): string {
        return $this->cidade;;		
	}
	
	public function getRua(): string {
		return $this->rua;
	}
	
	public function setRua(): string {
		return $this->rua;		
	}
}