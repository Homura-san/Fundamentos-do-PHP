<?php

echo "Resumo da PSR-1";
/*
    1º: Arquivos PHP DEVEM usar somente as tags <?php ou <?=
    PROIBIDO usar: 
        - short open tags <?
        - tags ASP <%
        - tags de script <script language="PHP">
    
*/

/* 
    2º: A codificação dos arquivos DEVE ser utf-8 sem BOM.
*/

/*
    3°: Arquivos PHP DEVERIAM:
        1 - declarar símbolos (classes, funções, constantes)
        2 -causar efeitos colaterais (echo, include)
    Mas NÃO DEVERIAM fazer ambos

    Exemplo de código errado:
        <?php
            ini_set('error reporting', E_ALL);
            include "file.php";
            echo "<html>\n";

            function foo(){
                # code...
            }
        ?>
*/

/*
    4°: Classes devem ser delcaradas em StudlyCaps. Exemplo -> class CarroBranco{} 
*/


/* 
    5º: Constantes devem ser declaradas em letras maiúsculas e separadas
por underscores_
    exemplo: const DATE_TIME = "2017-04-26 9:45 PM"
*/

/*
    6°: Nomes de métodos devem usar camelCase
            - meuMetodo()
    
*/

/*  */