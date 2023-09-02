<?php

// Atualizar escrita de arquivo usando o file
$arquivo = file('texto.txt');
$espaco = "
";

// Atualizar informações
$gravar = fopen('word.txt', 'w');

foreach($arquivo as $linha) {
    $palavras = explode(' ', $linha); // O explode é equivalente ao .split() do python
    $primeira = $palavras[0] . $espaco; // Pega a primeira palavra
    
    $primeira = str_replace(".", '', $primeira);
    $primeira = str_replace("\n", '', $primeira);
    fwrite($gravar, $primeira); // gravar o arquivo
}
fclose($gravar);
$gravar = fopen('word.txt', 'a+');

fwrite($gravar, "\n");

// A função file te permite percorrer o arquivo mais de uma vez
foreach($arquivo as $linha) {
    $palavras = explode(' ', $linha); // O explode é equivalente ao .split() do python
    $ultima = $palavras[count($palavras) - 1]; // Pega a última palavra
    
    $ultima = str_replace(".", '', $ultima);
    $ultima = str_replace("\n", '', $ultima);
    fwrite($gravar, $ultima); // gravar o arquivo
}

fclose($gravar);

echo "Arquivo salvo em word.txt";