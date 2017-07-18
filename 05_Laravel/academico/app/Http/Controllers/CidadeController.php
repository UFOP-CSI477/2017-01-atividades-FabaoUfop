<?php

namespace App\Http\Controllers;

use App\Cidade;
use Illuminate\Http\Request;
use App\Estado;


class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cidades = Cidade::orderBy('nome')->get();
        return view('cidades.index')->with('cidades',$cidades);
    }
/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $estados = Estado::orderBy('nome')->get();
          return view('cidades.create')->with('estados',$estados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // com base nas chamadas dos metodos definidos nas routes, 3 formas de fazer a chamada
    // dd($request->all());
          Cidade::create($request->all());
           //  se fosse poucos campos, outras formas
          //  $cidade = new Cidade;
         //  $cidade->nome = $request->nome;
          return redirect( '/cidades');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
     // recebe o metedo modelo cidade , converte em objeto convertido
    public function show(Cidade $cidade)
    {
        //associado ao metodo GET (consulta de dados)
        return view ('cidades.show')->with('cidade',  $cidade);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidade $cidade)
    {
        //associado a update
        $estados = Estado::orderBy('nome')->get();
              return view ('cidades.edit')->with('cidade',$cidade)->with('estados',$estados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cidade $cidade)
    {
        //seta as altereaçoes no objeto cidade
        //dd($request);
        $cidade->nome = $request->nome;
        $cidade->estado_id = $request->estado_id;
        $cidade->save();
        return redirect('/cidades');


      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidade $cidade)
    {
        //
    }
}
