<?php

class CadastroAlunos{
    private $alunos = [];

    public function cadastrarAluno($aluno){
        $this->alunos[] = $aluno;
    }

    public function listarAlunos(){
        return $this->alunos;
    }
}


?>