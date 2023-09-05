<?php

class Documentos {
    protected $mascara = '000.000.000-00';
    protected $cpf = '';
    private $test = 'Essa classe não será herdada. Disponível apenas na classe que a cria.';

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
}