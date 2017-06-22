<?php

//parametros para conexao com bd

  $db = new PDO('mysql:127.0.0.1,dbname=academico','sistemaweb','123456');
//consulta
  $retorno = $db->query("SELECT * FROM alunos");
  //recupera dados
  $linha = $retorno -> fetch(PDO::FETCH_ASSOC);
  echo $linha['nome'] . "<br>";
  var_dump($linha);
