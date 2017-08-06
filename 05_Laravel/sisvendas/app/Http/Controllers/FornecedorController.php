<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor;

class FornecedorController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $f = Fornecedor::all();
      return view ('fornecedores.index')->with('fornecedores', $f);
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view ('fornecedores.create');
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //  dd($request->all());
      Fornecedor::create($request->all());
      return redirect ('/fornecedores');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Fornecedor $fornecedor)
  {
      return view('/fornecedores.show')->with('fornecedor',$fornecedor);
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Fornecedor $fornecedor)
  {
        return view('/fornecedores.edit')->with('fornecedor',$fornecedor);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Fornecedor $fornecedor)
  {
    $fornecedor->nome = $request->nome;
    $fornecedor->nomeFantasia = $request->nomeFantasia;
    $fornecedor->telefone= $request->telefone;
    $fornecedor->save();
    return redirect('/fornecedores');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Fornecedor $fornecedor)
  {
      $fornecedor ->delete();
      return redirect('/fornecedores');
  }
}
