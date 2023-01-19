<?php

require_once 'autoload.php';




use Samuel\Banco\Modelo\Funcionario\Desenvolvedor;
use Samuel\Banco\Modelo\Funcionario\Diretor;
use Samuel\Banco\Modelo\Funcionario\Gerente;
use Samuel\Banco\Service\ControladorDeBonificacoes;



$f1 = new Gerente('Samuel', '123', 5000);

$f2 = new Desenvolvedor('Edlucia', '321', 3000);

$f2->SobeDeNivel();

$f3 = new Diretor('Bianca', '654', 8000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($f1);
$controlador->adicionaBonificacaoDe($f2);
$controlador->adicionaBonificacaoDe($f3);


echo $controlador->recuperaTotal().PHP_EOL;