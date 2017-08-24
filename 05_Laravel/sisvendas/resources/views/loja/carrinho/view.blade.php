@extends('principal')

@section('conteudo')

<h1>Carrinho Compras</h1>

<a href="/carrinho/comprar" >Comprar</a>

@if(Session::has('carrinho'))
@php
$carrinho = Session::get('carrinho');

//verifica se esta vindo var_dump($carrinho);
@endphp

@foreach($carrinho as $c)

Código Produto:{{$c->produto_id}}<br>
Nome Produto:{{$c->produto->nome}}<br>
Quantidade:{{$c->quantidade}}<br>
@endforeach

@else
<p class='alert alert-warning'>Não existe nenhum produto no carrinho</p>
@endif

@endsection
