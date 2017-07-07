<?php
// comando php artisan tinker: metodos get,first, all, outras
  namespace App;
//microframe Illuminate camada Model
  use Illuminate\Database\Eloquent\Model;
  //estende (herda) de modelo diretamente da tabela
  class Aluno extends Model{
    public $timestamps = false;
  }

?>
