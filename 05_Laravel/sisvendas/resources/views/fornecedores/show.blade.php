@extends('principal')
@section('conteudo')
<h1>Excluir Fornecedor</h1>

<a href="/fornecedores">Voltar</a>

<p>Id:{{$fornecedor->id}}</p>
<p>Nome:{{$fornecedor->nome}}</p>
<p>Nome Fantasia:{{$fornecedor->nomeFantasia}}</p>
<p>Telefone:{{$fornecedor->telefone}}</p>

<form method="post" action="/fornecedores/{{$fornecedor->id}}">
  <!-- cria tokens para as rotas -->
  {{csrf_field()}}
  <!-- cria input do tipo RAIDEN e cria a rota para o methodo pretendido-->
  {{method_field('DELETE')}}
  <input type="submit" value="Confirmar Exclusão">
</form>

@endsection
