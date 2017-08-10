@extends('principal')
@section('conteudo')
<h1>Editar Testes</h1>
<!--ver se ira solicitar pelo nome ou ID -->
<form method ="post" action="/tests/{{$tests->id}}">
  <!-- comando para reconhecer o cliente -->
  {{csrf_field()}}
  <!-- conversão do metodo post -->
  {{method_field('PATCH')}}

	Data :<input type = "text" name ="preco" maxlenght="20" value="{{$tests->preco}}"><br>
	<input type="submit" name ="botaoSalvar" value="Salvar">
</form>
@endsection
