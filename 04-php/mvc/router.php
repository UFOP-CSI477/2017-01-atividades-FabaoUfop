<?php
//Includes - framework
  include './model/database.php';
  include './model/aluno.php';
  include './controller/alunosControler.php';

  //tratamento das Rotas
    use Controller\AlunosController;
    $op = $_GET['op'];
        if($op == 1){
        $aluno = new AlunosController;
        $aluno->listar();
      }
 ?>
