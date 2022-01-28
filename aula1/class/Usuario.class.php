<?php

class Usuario {
    //declaração dos atributos da classe
    //ENCAPSULAMENTO - se o atributo é public ( - ),
    //private ( + ) ou protected ( # )
    public $nome;
    public $email;
    public $celular;
}

    //function no PHP 00 são os métodos

    function getUsuario($nome,$email,$celular){
        return "Nome do Cliente: {$nome} <br> E-mail: {$email} <br> Celular: {$celular} <hr>";
    }

   function exibirCliente(){
        echo "Nome do Cliente: {$nome}<br>";
        echo "E-mail: {$email}<br>";
        echo "<hr>";
    }