<?php

require_once 'Documentos.php';

class Pessoa extends Documentos {
/* 
    Declara a classe Pessoa com uma descrição genérica de uma pessoa
*/
    
    public function __construct(protected $nome, protected $cpf)
    {
        $this->nome = $nome;
        $this->cpf = Documentos::validaCpf($cpf);
    }

    // Ler o nome
    public function getNome(){
        return $this->nome;
    }
    // Alterar o nome
    public function setNome($novo_nome){
        $this->nome = $novo_nome;
    }
}