<?php

    class Aluno{
        public $aluno;
        public $turma;
      
        function __construct($aluno,$turma){
            $this->aluno = $aluno;
            $this->turma = $turma;

        }

        function listarAluno(){
            return "<p>
                    nome: {$this->aluno}<br>
                    turma:{$this->turma}<br>
                    </p>
                    <hr>
                    ";
                    
        }
    }

?>