<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
      //relaciona 1-N estados - cidades
      public function cidades(){
        return  $this->hasMany('App\Cidade');
      }
}
