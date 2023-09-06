<?php

require_once 'Documentos.php';

class Pessoa extends Documentos {
/* 
    Declara a classe Pessoa com uma descrição genérica de uma pessoa
*/
    
    private $nome = 'nome-pessoa'; // protected funcionaria de forma semelhante

    // Ler o nome
    public function getNome(){
        return $this->nome;
    }
    // Alterar o nome
    public function setNome($novo_nome){
        $this->nome = $novo_nome;
    }
}