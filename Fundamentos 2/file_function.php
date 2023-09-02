<?php

// Lendo arquivos => Atquivo para array

$arquivo = file('texto.txt');

foreach ($arquivo as $linha) {
    #echo $linha . "\n";
}

// Lendo o texto como uma única string
$texto = file_get_contents('texto.txt');
echo $texto;

# As funções file e file_get_contents lêem o arquivo de uma vez.
# Por isso, são menos eficazes  que a função fopen.