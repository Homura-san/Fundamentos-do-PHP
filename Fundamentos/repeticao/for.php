<?php

$lista = ['Primeiro', 'Segundo', 3, 'False', TRUE];

#for ($i = 0; $i < count($lista); $i++){
// for ($i = count($lista) - 1; $i >= 0; $i--){
//     echo "{$lista[$i]}";
//     echo " ";
// }

foreach ($lista as $key) {
    echo "O valor atual é: {$key}.
    ";
}
