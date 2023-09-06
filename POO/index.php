<?php

require_once 'Pessoa.php';
require_once 'Documentos.php';

$pessoa1 = new Pessoa();

$pessoa1-> setNome('José');
$pessoa1->setCpf('111.222.333-44');

echo 'Nome: ' . $pessoa1->getNome() . "\nCPF: " . $pessoa1->getCpf();