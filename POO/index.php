<?php

// Programação Orientada a Objetos

// Classes
class NomeDaClasse{
    // Visibilidade => public, private, protected
    // Propriedades
    public $propriedade = '';

    // métodos
    public function metodo(){
        echo $this->propriedade;
    }
}

class Fiat extends NomeDaClasse {
    public $propriedade2 = '';
}
// Objetos

$objeto = new NomeDaClasse();