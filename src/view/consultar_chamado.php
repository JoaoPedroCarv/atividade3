<?php
require_once "../../validador_acesso.php";
require_once "C:/xampp/htdocs/chamadoReal/src/models/Aluno.php";
require_once "C:/xampp/htdocs/chamadoReal/src/models/CadastroAlunos.php";

$cadastro = new CadastroAlunos();
$alunos = $cadastro->listarAlunos();

var_dump($alunos);

if ($alunos !== null) {
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Alunos Cadastrados</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
      .card-body {
        padding: 1.25rem;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="../../logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Alunos Cadastrados
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../../logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>
    <div class="container">    
      <div class="row">
        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Lista de Alunos
            </div>
            <div class="card-body">
              <?php foreach($alunos as $aluno) { ?>
                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title"><?=$aluno->getNome()?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$aluno->getMatricula()?></h6>
                    <p class="card-text"><?=$aluno->getCurso()?></p>
                  </div>
                </div>
              <?php } ?>
              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
} else {
    echo "Não há alunos cadastrados.";
}
?>

