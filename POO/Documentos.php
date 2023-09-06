<?php

class Documentos {
    private $mascara = '000.000.000-00';
    protected $cpf = '';
    private $test = 'Essa classe não será herdada. Disponível apenas na classe que a cria.';

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        if(strlen($cpf) == 14){
            $this->cpf = $cpf;
        }
        else{
            echo "Aviso: Você digitou o seguinte CPF:
$cpf - Este valor é inválido. Digite o CPF da seguinte forma: $this->mascara\n";
        }
    }
}