<?php

$lista = [1, 2, 3, 4, 5];
$a = 0;

foreach ($lista as $i) {
    if ($i % 2 == 0) continue;

    echo $i . ' ';
    #if ($a == 2) break;
    $a++;
}

