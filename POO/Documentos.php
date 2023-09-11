<?php

class Documentos {
    protected $cpf = '';
    private $test = 'Essa classe não será herdada. Disponível apenas na classe que a cria.';
    const MASCARA = '000.000.000-00';

    public function getCpf(){
        return $this->cpf;
    }

    protected function validaCpf($cpf){
        if(strlen($cpf) == 14){
            return $cpf;
        }
        else{
            echo "Aviso: Você digitou o seguinte CPF:
$cpf - Este valor é inválido. Digite o CPF da seguinte forma: {Documentos::Mascara}\n";
        }
    }

    public function setCpf($cpf){
        $this->cpf = Documentos::validaCpf($cpf);
    }
}