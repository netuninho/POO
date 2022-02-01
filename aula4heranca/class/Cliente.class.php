<?php

class Cliente {
    public $endereco;
    public $bairro;

    function __construct($endereco,$bairro){
        $this -> endereco = $endereco;
        $this -> bairro = $bairro;
    }

    function verEndereco(){
        return "Endereço: {$this -> endereco}";
    }
}