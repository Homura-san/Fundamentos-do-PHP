<?php

// Lendo arquivos => Atquivo para array

$arquivo = file('texto.txt');

foreach ($arquivo as $linha) {
    #echo $linha . "\n";
}

// 
$texto = file_get_contents('texto.txt');
echo $texto;