<?php

$arquivo = fopen('texto.txt', 'r');

// gravar informações
$gravar = fopen('word.txt', 'w');

while (($linha = fgets($arquivo, 4096)) !== false) {
    // echo $linha . "\n";
    $palavras = explode(' ', $linha);
    

    $primeira = $palavras[0];
    // gravar o arquivo
    fwrite($gravar, $primeira);

    # exit(); //encerra o laço while
}

fclose($gravar);
fclose($arquivo);