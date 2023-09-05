<?php

require_once 'Pessoa.php';
$pessoa1 = new Pessoa();
$pessoa1 -> nome = 'José';
// echo $pessoa1->saudar();

echo $pessoa1->a;
//echo $pessoa1->b;
//echo $pessoa1->c;
$pessoa1->ler_bc();
//$pessoa1->ler_c();

// Programação Orientada a Objetos

// Classes
// class NomeDaClasse{
//     // Visibilidade => public, private, protected
//     // Propriedades
//     public $propriedade = '';

//     // métodos
//     public function metodo(){
//         echo $this->propriedade;
//     }
// }

// class Fiat extends NomeDaClasse {
//     public $propriedade2 = '';
// }
// // Objetos

// $objeto = new NomeDaClasse();