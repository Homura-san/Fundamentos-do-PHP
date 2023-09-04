<?php
// Classes
class Pessoa {
/* 
    Declara a classe Pessoa com uma descrição genérica de uma pessoa
*/
    
    public $nome = 'nome-pessoa';

    public function saudar(){
        echo "Olá, $this->nome";
    }
}