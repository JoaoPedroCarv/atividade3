<?php

class Aluno{
    private $nome;
    private $matricula;
    private $curso;

    public function __construct($nome, $matricula, $curso){
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function getInfoAluno($matricula){
        echo "NOME:$this->nome Curso:$this->curso"; 
    }

}

?>