<?php

require_once 'Pessoa.php';
require_once 'Documentos.php';

$pessoa1 = new Pessoa();

$pessoa1-> setNome('José');
echo $pessoa1->getNome();

echo "\n";

$pessoa1->setCpf('000.111.222-33');
echo $pessoa1->getCpf();