<?php

// Atualizar escrita de arquivo usando o fopen e fgets
$arquivo = fopen('texto.txt', 'r');

// Atualizar informações
$gravar = fopen('word.txt', 'a+');

while (($linha = fgets($arquivo, 4096)) !== false) {
    // echo $linha . "\n";
    $palavras = explode(' ', $linha); // O explode é equivalente ao .split() do python
    $primeira = $palavras[count($palavras) - 1] . '
';
    // gravar o arquivo
    fwrite($gravar, $primeira);

    # exit(); //encerra o laço while
}

fclose($gravar);
fclose($arquivo);

echo "Arquivo salvo em word.txt";

# Pesquisar modos da função fopen