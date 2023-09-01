<?php

// Lendo arquivos
$arquivo = fopen('texto.txt', 'r'); // fopen modo 'r' -> somente leitura
while (($linha = fgets($arquivo, 4096)) !== false) {
    echo $linha;
}
