<?php
//Padrão Singloton

namespace Model;
use PDO;

class Database{
  protected $db = null;
  //modificadores e construtor
  protected function __construct(){

  }
  //Singleton - instace - static

  public static function getInstance(){

    static $instance = null;
    //==== mesmo tipo ou nulo
      if($instance === null){
        $instance = new static();
    }
      return $instance;
  }
  public function getDB(){
    //  if($db === null){
        $db = new PDO('mysql:host=127.0.0.1;dbname=academico','sistemaweb','123456');
    //}
      return $db;
  }
}
?>
