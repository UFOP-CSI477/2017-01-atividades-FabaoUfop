<?php
  namespace Controller;
  use Model\Aluno;
  use Model\Database;

  class AlunosController{
    public function listar(){
      //Acesso ao Modelo
      $aluno = new Aluno(Database::getInstance()->getDB());
      //manipular
      $lista = $aluno->getAlunos();
      
      //var_dump($lista);
      //Invocar a view
      include './view/lista.php';

    }
  }
