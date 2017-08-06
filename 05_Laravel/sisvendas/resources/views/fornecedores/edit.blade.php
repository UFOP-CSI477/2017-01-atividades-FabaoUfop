@extends('principal')
@section('conteudo')
<h1>Editar Fornecedores</h1>
<form method ="post" action="/fornecedores/{{$fornecedor->id}}">
  <!-- comando para reconhecer o cliente -->
  {{csrf_field()}}
  <!-- conversão do metodo post -->
  {{method_field('PATCH')}}

	Nome: <input type = "text" name ="nome" maxlenght="100" value="{{$fornecedor->nome}}" ><br>
	Nome Fantasia : <input type = "text" name ="nomeFantasia" maxlenght="100" value="{{$fornecedor->nomeFantasia}}"><br>
  Telefone : <input type = "text" name ="telefone" maxlenght="20" value="{{$fornecedor->telefone}}"><br>

	<input type="submit" name ="botaoSalvar" value="Salvar">
</form>

@endsection
