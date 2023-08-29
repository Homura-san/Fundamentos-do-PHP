<?php
// Arquivo principal

/* 
    Se o include não encontrar o arquivo, dá warning mas não impede o fluxo de código. 
    Se o reqire não encontrar o arquivo, ele dá erro e impede o fluxo de código. 
*/

/*
include 'Fundamentos/repeticao/for.php';
echo 'include';

require 'dp.php';
echo 'require';
*/?>
<?php include 'aplicacao de teste/head.php' ?>
<body>
    <header>Meu site <hr></header>
    <?php include 'aplicacao de teste/menu.php' ?>
    <?php include 'aplicacao de teste/footer.php' ?>
</body>