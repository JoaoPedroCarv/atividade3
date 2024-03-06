<?php
require_once "../../validador_acesso.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['nome']) && !empty($_POST['matricula']) && !empty($_POST['curso'])) {
        require_once "C:/xampp/htdocs/chamadoReal/src/models/Aluno.php";
        require_once "C:/xampp/htdocs/chamadoReal/src/models/CadastroAlunos.php";

        $aluno = new Aluno($_POST['nome'], $_POST['matricula'], $_POST['curso']);
        $cadastro = new CadastroAlunos();
        $cadastro->cadastrarAluno($aluno);

        header("Location: home.php");
        exit();
    } else {
        echo "Todos os campos são obrigatórios!";
    }
}
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Escola</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="../../logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Escola
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../../logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>
    <div class="container">    
      <div class="row">
        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Novo aluno
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <form method="post" action="abrir_chamado.php">
                    <div class="form-group">
                      <label>Nome</label>
                      <input name="nome" type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="form-group">
                      <label>Matrícula</label>
                      <input name="matricula" type="text" class="form-control" placeholder="Matrícula">
                    </div>
                    <div class="form-group">
                      <label>Curso</label>
                      <select name="curso" class="form-control">
                        <option>Engs. Software</option>
                        <option>Chato</option>
                        <option>Agronomia</option>
                        <option>Adm</option>
                        <option>Direito</option>
                      </select>
                    </div>
                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                      </div>
                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Cadastrar</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
