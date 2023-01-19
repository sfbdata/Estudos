<?php

namespace Samuel\Banco\Modelo;


interface Autenticavel 
{
    public function podeautenticar(string $senha);
}