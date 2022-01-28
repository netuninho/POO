<?php

class Cliente {
    public $nConta;
    public $tConta;
    public $nRegistro;
    public $saldo;

    //definindo metódo com passagem de parametros 
    function setCliente($nConta, $tConta, $nRegistro, $saldo){
        //pseudo variavel/ this = "pegue isso e bote aqui"
        $this -> nConta = $nConta;
        $this -> tConta = $tConta;
        $this -> nRegistro = $nRegistro;
        $this -> saldo = $saldo;
    }

    function exibirDadosClientes(){
        echo "Número da Conta: {$this -> nConta}<br>";
        echo "Tipo da Conta: {$this -> tConta} <br>";
        echo "Número Registro: {$this -> nRegistro}<br>";
        echo "Saldo: {$this -> saldo}<br>";
        echo "<hr>";
    }

    function depositar($valor){
        $this -> saldo = $this -> saldo + $valor;
    }

    function sacar($valor){
        if($valor<=$this->saldo){
            $this->saldo = $this->saldo - $valor; 
       } else {
          echo "Saldo Insuficiente.<br> 
                Saldo em Conta: {$this->saldo} <br>";   
       }
    }
}
