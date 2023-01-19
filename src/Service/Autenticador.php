<?php

namespace Samuel\Banco\Service;

use Samuel\Banco\Modelo\Autenticavel;

class Autenticador 
{
    public function tentalogin(Autenticavel $autenticavel, string $senha): void 
    {
        if ($autenticavel->podeautenticar($senha)) 
        {
            echo "ok, Usuário logado com sucesso." . PHP_EOL;
        } else {
            echo "Ops, deu errado ae";
        }

    }
}