<?php

class CadastroAlunos {
    private $dados = [];

    public function cadastrarAluno(Aluno $aluno) {
        $this->dados[] = $aluno;
    }

    public function listarAlunos() {
        return $this->dados;
    }
}


?>