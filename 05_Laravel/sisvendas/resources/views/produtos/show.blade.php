@extends('principal')
@section('conteudo')
<h1>Excluir Produto</h1>

<a href="/produtos">Voltar</a>
<p>Id:{{$produto->id}}</p>
<p>Nome:{{$produto->nome}}</p>
<p>Preço R$:{{$produto->preco}}</p>

<form method="post" action="/produtos/{{$produto->id}}">
  <!-- cria tokens para as rotas -->
  {{csrf_field()}}
  <!-- cria input do tipo RAIDEN e cria a rota para o methodo pretendido-->
  {{method_field('DELETE')}}
  <input type="submit" value="Confirmar Exclusão">
</form>
@endsection
