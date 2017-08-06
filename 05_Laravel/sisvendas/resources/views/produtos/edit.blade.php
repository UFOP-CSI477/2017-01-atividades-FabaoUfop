@extends('principal')
@section('conteudo')
<h1>Editar Produto</h1>
<form method ="post" action="/produtos/{{$produto->id}}">
  <!-- comando para reconhecer o cliente -->
  {{csrf_field()}}
  <!-- conversão do metodo post -->
  {{method_field('PATCH')}}

	Nome: <input type = "text" name ="nome" maxlenght="100" value="{{$produto->nome}}" ><br>
	Preço : <input type = "text" name ="preco" maxlenght="100" value="{{$produto->preco}}"><br>

	<input type="submit" name ="botaoSalvar" value="Salvar">

</form>

@endsection
