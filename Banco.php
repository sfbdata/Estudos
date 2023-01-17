<?php

require_once 'autoload.php';


use Samuel\Banco\Modelo\Conta\Conta;
use Samuel\Banco\Modelo\Conta\ContaCorrente;
use Samuel\Banco\Modelo\Conta\ContaPoupanca;
use Samuel\Banco\Modelo\Conta\Titular;

use Samuel\Banco\Modelo\Endereco;


$c1 = new ContaCorrente(
    new Titular(
        '123',
        'Samuel',
        new Endereco('asd', 'ad', 'asd', 'asd', 'asd')
    )
);

$c2 = new ContaPoupanca(
    new Titular(
        '321',
        'Edlúcia',
        new Endereco(
            'kjh',
            'asd',
            'qwe',
            'oiu',
            'ert'
            
        )
    )
);


//$c1->saldo = 200;
//com o método de acesso em PRIVATE, nao é possível acessar a variavel desse modo. Apenas por métodos.


//** Métodos da classe **//
$c1->depositar(10000);
$c1->sacar(20);
$c1->transferir(1000,$c2);


//** Amostra dos dados **//
echo $c1->nome().PHP_EOL;
echo $c1->cpf() . PHP_EOL;
echo $c1->getSaldo().PHP_EOL;
echo ''.PHP_EOL;

echo $c2->nome().PHP_EOL;
echo $c2->cpf().PHP_EOL;
echo $c2->getSaldo().PHP_EOL;
echo ''.PHP_EOL;

echo Conta::getcontas().PHP_EOL;

//var_dump($c1);
//var_dump ($c2);

