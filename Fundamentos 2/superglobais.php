<?php

$nome = 'Carlo';

function funcao ($x){
    $x = 'Capone';
    $GLOBALS['x'] = $x;
};

funcao($nome);
echo $x;
