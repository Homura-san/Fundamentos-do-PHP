<?php
// Classes
class Pessoa {
/* 
    Declara a classe Pessoa com uma descrição genérica de uma pessoa
*/
    
    public $nome = 'nome-pessoa';
    
    // Visibilidade
    public $a = 'a';
    private $b = 'b'; // Um atributo privado não é acessível externamente
    protected $c = 'c'; // Um atributo protegido não é acessível externamente

    public function saudar(){
        echo "Olá, $this->nome";
    }

    public function ler_bc(){
        echo $this->b;
        $this->ler_c();
    }

    protected function ler_c(){
        echo $this->c;
    }
}