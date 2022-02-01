<?php

class ClientePessoaFisica extends Cliente{
    public $cpf;
    public $nome;

    function __construct($endereco,$bairro,$cpf,$nome){
        parent::__construct($endereco,$bairro);
        $this -> cpf = $cpf;
        $this -> nome = $nome;
    }

    function verEnderecoPessoaFisica(){
        return "Endereço Pessoa Física: {$this -> endereco}";
    }

}