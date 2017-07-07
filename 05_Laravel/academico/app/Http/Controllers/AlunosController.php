<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunosController extends Controller
{
    //não existe relação com nome / metodo
    public function index(){
      $alunos = Aluno::orderBy('id')->get();
      //return $alunos; retorna o json
      //visualiza estrutura do banco (semelhate var_dump)dd($alunos);
      //tratamentos da camada de negócios

      return view('alunos.index')->with('alunos',$alunos);
    }

}
