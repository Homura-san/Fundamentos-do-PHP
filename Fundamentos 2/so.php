<?php

// Procurar arquivos no sistema operacional - Função GLOB

// $arquivos_php = glob('*.php');
// foreach ($arquivos_php as $i) {
//     echo $i . '<br>';

//     $texto = file_get_contents($i);
//     echo $texto;
//     echo '<br>';
// }

// echo '<br>';

// Arquivos txt
$arquivos_txt = glob('*.txt');

@mkdir('txt');

foreach ($arquivos_txt as $i) {
    echo '<b>' . $i . '</b><br>';

    $texto = file_get_contents($i);
    echo $texto;
    
    $w = fopen('txt/'.$i, 'w');
    fwrite($w, $texto);
    fclose($w);

    echo '<br>';
}
