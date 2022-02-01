<?php

class Pagamento extends Aluno {

    public $valor;
    public $status;

    function __construct($aluno,$turma,$valor,$status){

        parent:: __construct($aluno,$turma);
        $this->valor = $valor;
        $this->status = $status;
    }

    public function status(){
        return "<p> <br>
        aluno:{$this->aluno}<br>
        turma:{$this->turma}<br>
        valor:{$this->valor}<br>
        status:{$this->status}<br>
        <p/>
        ";
    }
}


?>