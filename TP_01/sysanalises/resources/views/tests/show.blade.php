@extends('principal')
@section('conteudo')
<h1>Excluir Testes</h1>

<a href="/tests">Voltar</a>
<p>Id:{{$t->id}}</p>
<p>Preço:{{$t->preco}}</p>
<form method="post" action="/tests/{{$t->id}}">
  <!-- cria tokens para as rotas -->
  {{csrf_field()}}
  <!-- cria input do tipo RAIDEN e cria a rota para o methodo pretendido-->
  {{method_field('DELETE')}}
  <input type="submit" value="Confirmar Exclusão">
</form>
@endsection
