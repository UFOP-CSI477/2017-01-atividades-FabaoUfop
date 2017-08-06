@extends('principal')

@section('conteudo')

<h1>Inserir produtos</h1>

<form method ="post" action="/produtos">
  <!-- comando para reconhecer o cliente -->
  {{csrf_field()}}

	Nome: <input type = "text" name ="nome" maxlenght="100"><br>
	Preço: <input type="text"  name="preco"><br>

	<input type="submit" name ="botaoSalvar" value="Salvar">


</form>

@endsection
