<?php

$x = 2;

$nome = match($x){
    1 => 'um',
    2 => 'dois',
    3 => 'três',
    4 => 'quatro',
    5 => 'cinco'
};
echo $nome;
