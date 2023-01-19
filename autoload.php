<?php

spl_autoload_register(function (string $nomeCompletoDaClasse) {
    //Samuel\Banco\Modelo\Funcionario
    //src/Modelo/Funcionario.php

    $caminhoArquivo = str_replace('Samuel\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';


    if(file_exists($caminhoArquivo)){
        require_once $caminhoArquivo;
    } else {
        echo "autoload deu problema aiiikkkkkkkkkkkkkkkkkkkkkkkk" . PHP_EOL;
        echo $caminhoArquivo . PHP_EOL;
    }

});