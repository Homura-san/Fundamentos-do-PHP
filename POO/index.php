<?php

require_once 'Pessoa.php';
require_once 'Documentos.php';

$pessoa1 = new Pessoa('José', '111.222.333-44');
$pessoa2 = new Pessoa('Carla', '555.222.333-44');

echo 'Nome: ' . $pessoa1->getNome() . "\nCPF: " . $pessoa1->getCpf();
echo "\n";
echo 'Nome: ' . $pessoa2->getNome() . "\nCPF: " . $pessoa2->getCpf();