<?php

class CadastroAlunos{
    private $dados = [];

    private function __construct(array $dados){
        $this->dados = $dados;
    }

    public function cadastrarAlunos(){
        return $this->dados;
    }
}

?>