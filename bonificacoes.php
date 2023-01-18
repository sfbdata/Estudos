<?php

require_once 'autoload.php';




use Samuel\Banco\Modelo\Funcionario;
use Samuel\Banco\Service\ControladorDeBonificacoes;



$f1 = new Funcionario('Samuel', '123', 'developer', 8000);

$f2 = new Funcionario('Edlucia', '321', 'CEO', 12000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($f1);
$controlador->adicionaBonificacaoDe($f2);

echo $controlador->recuperaTotal().PHP_EOL;