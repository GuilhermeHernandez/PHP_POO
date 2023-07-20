<?php 

//PSR4 - RECOMENDA FORMA DE FAZER AUTOLOAD

// - > Busca classe automaticamente

spl_autoload_register( function (string $nomeDaClasseFaltante) {
    // CAMINHO DO ARQUIVO QUE ESTA FALTANDO EX: Alura\Banco\Modelo\Conta\Titular
    $caminhoClasse = str_replace('Alura\\Banco','src',$nomeDaClasseFaltante);
    $caminhoClasse = str_replace('\\',DIRECTORY_SEPARATOR,$caminhoClasse);
    $caminhoClasse .= '.php';

    if(file_exists($caminhoClasse)){
        require_once $caminhoClasse;
    }
});

?>
