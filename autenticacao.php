<?php


use Samuel\Banco\Modelo\Funcionario\Diretor;
use Samuel\Banco\Service\Autenticador;


require_once 'autoload.php';


$auth = new Autenticador();
$dir = new Diretor('samuel','321',10000);

$auth->tentalogin($dir, '1234');