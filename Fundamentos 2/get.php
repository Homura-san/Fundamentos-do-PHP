<?php

$nome = addslashes($_GET['produto']);
$preco = addslashes($_GET['preco']);
echo "O produto {$nome} custa {$preco} reais.";
