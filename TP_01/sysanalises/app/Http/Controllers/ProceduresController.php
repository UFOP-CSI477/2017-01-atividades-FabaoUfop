<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Procedures;

class ProceduresController extends Controller
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
      $p = Procedures::all();
      return view ('procedures.index')->with('procedures', $p);
  }
  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view ('procedures.create');
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
      Procedures::create($request->all());
      return redirect ('/procedures');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Procedures $procedures)
  {
      return view('/procedures.show')->with('procedures',$procedures);
  }
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Procedures $procedures)
  {
        return view('/procedures.edit')->with('procedures',$procedures);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Procedures $procedures)
  {
    $procedures->nome = $request->nome;
    $procedures->preco = $request->preco;
    $procedures->save();
    return redirect('/procedures');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Procedures $procedures)
  {
      $procedures ->delete();
      return redirect('/procedures');
  }
}
