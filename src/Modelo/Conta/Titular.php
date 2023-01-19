<?php

namespace Samuel\Banco\Modelo\Conta;

use Samuel\Banco\Modelo\Autenticavel;
use Samuel\Banco\Modelo\Endereco;
use Samuel\Banco\Modelo\Pessoa;
class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    
    public function __construct(string $cpf, string $nome, Endereco $endereco) {
        parent::__construct($cpf, $nome);
        $this->endereco = $endereco;
    }

    public function getendereco(): Endereco
    {
        return $this->endereco;
    }

    public function nome():string {
        return $this->getnome();
    }

    public function cpf(): string {
        return $this->getnumero();
    }

	public function podeautenticar(string $senha) {
        return $senha == 'abcd';
	}
}