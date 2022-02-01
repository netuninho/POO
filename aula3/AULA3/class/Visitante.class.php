<?php

class Visitante{
    public $vi;

    function __construct($vi){
        $this -> vi = $vi;
    }

    function exibirVisitante(){
        return $this -> vi;
    }
}