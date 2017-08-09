@extends('principal')
@section('conteudo')
<h1>Excluir Procedimentos</h1>

<a href="/procedures">Voltar</a>
<p>Id:{{$procedures->id}}</p>
<p>Nome:{{$procedures->nome}}</p>
<p>Nome Fantasia:{{$procedures->nomeFantasia}}</p>
<p>Telefone:{{$procedures->telefone}}</p>

<form method="post" action="/procedures/{{$procedures->id}}">
  <!-- cria tokens para as rotas -->
  {{csrf_field()}}
  <!-- cria input do tipo RAIDEN e cria a rota para o methodo pretendido-->
  {{method_field('DELETE')}}
  <input type="submit" value="Confirmar Exclusão">
</form>
@endsection
