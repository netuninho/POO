<?php

class Aluno {
    public $nome;
    public $nota;

    function __construct($nome,$nota){
        $this -> nome = $nome;
        $this -> nota = $nota;
    
    }
    
        function verAluno(){
            return print_r($this);
        }
    
}