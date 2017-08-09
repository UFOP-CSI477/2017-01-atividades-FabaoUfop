@extends('principal')
@section('conteudo')
<h1>Editar Procedimentos</h1>
<!--ver se ira solicitar pelo nome ou ID -->
<form method ="post" action="/procedimentos/{{$procedures->id}}">
  <!-- comando para reconhecer o cliente -->
  {{csrf_field()}}
  <!-- conversão do metodo post -->
  {{method_field('PATCH')}}
	Nome:<input type = "text" name ="nome" maxlenght="100" value="{{$procedimentos->nome}}" ><br>
	Preço :<input type = "text" name ="preco" maxlenght="20" value="{{$procedures->preco}}"><br>
	<input type="submit" name ="botaoSalvar" value="Salvar">
</form>
@endsection
