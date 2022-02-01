p<?php

class ClientePessoaJuridica extends Cliente{
    public $cnpj;
    public $nomeFantasia;

    function __construct($endereco,$bairro,$cnpj,$nomeFantasia){
        parent::__construct($endereco,$bairro);
        $this -> cnpj = $cnpj;
        $this -> nomeFantasia = $nomeFantasia;
    }

    function verEnderecoPessoaJuridica(){
        return "<p> Endereço Pessoa Física: {$this -> endereco} <br> Bairro: {$this -> bairro} <br> Nome Fantasia: {$this -> nomeFantasia} <br> CNPJ: {$this -> cnpj} </p>";
    }

}