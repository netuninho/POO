<?php

class Apartamento{
    public $ap;

    function __construct($ap){
        $this -> ap = $ap;
    }

    function exibirAp(){
        return $this -> ap;
    }
}