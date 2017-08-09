<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tests;

class TestsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
   public function __construct(){
     $this->middleware('auth');
   }
  public function index()
  {
      $t = Tests::all();
      return view ('tests.index')->with('tests', $t);
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view ('tests.create');
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
      Tests::create($request->all());
      return redirect ('/tests');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Tests $tests)
  {
      return view('/tests.show')->with('tests',$tests);
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Tests $tests)
  {
        return view('/tests.edit')->with('tests',$tests);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Tests $tests)
  {
    //$tests->nome = $request->nome;
    $tests->data = $request->data;
    $tests->save();
    return redirect('/tests');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Tests $tests)
  {
      $fornecedor ->delete();
      return redirect('/fornecedores');
  }
}
