<?php

//print_r($_SERVER);

foreach ($_SERVER as $chave => $valor) {
    echo '<br>';
    echo "{$chave}: {$valor}";
}
