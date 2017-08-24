<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Produto;
use App\Item;

class CarrinhoController extends Controller
{
    public function add(Request $request, Produto $produto) {
        //dd($produto->nome);

        if ($request->session()->has('carrinho')){
          $carrinho=$request->session()->get('carrinho');
        }else{
          $carrinho=[];
        }
        $item = new Item;
        $item ->produto_id = $produto->id;
        $item ->quantidade = $request->quantidade;
        array_push($carrinho,$item);
        $request->session()->put('carrinho',$carrinho);
        //session (['carrinho=>$carrinho'])
        return redirect ('/carrinho');
    }
    public function view(){
      return view('loja.carrinho.view');
    }
    public function store(){
      if((Auth::check()){
        //persistir compra
        if (session()->has('carrinho')){
          $carrinho=session()->get('carrinho');
        }else{
            session()->('mensagem','O carrinho esta vazio');
            session()->flash('tipo','alert-warning');
            return redirect ('/');
          }
          $compra= new Compra;
          $compra->user_id = Auth::id();
          $compra->save();
          foreach ($carrinho as $c){
            $c->compra_id = $compra-id;
            $c->save();
          }
          session()->forget('carrinho');
          session()->flash('tipo','alert-warning');
        }else{
        return redirect('/login');
      }
    }
}
