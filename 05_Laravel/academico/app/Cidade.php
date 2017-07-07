<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
  //relação 1-N cidades ->Alunos
    public function estado(){
      return $this->belongsTo('App\Estado');
    }
  //relaciona 1-N estados - cidades
    public function alunos(){
      return $this->hasMany('App\Aluno');
    }
}
