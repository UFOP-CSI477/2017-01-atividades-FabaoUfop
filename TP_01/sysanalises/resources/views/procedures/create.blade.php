@extends('principal')
@section('conteudo')
<h1>Inserir Procedimentos</h1>
<form method ="post" action="/procedures">
  <!-- comando para reconhecer o cliente -->
  {{csrf_field()}}
	Nome: <input type = "text" name ="nome" maxlenght="100"><br>
	Preço:<input type="text" name="preço" maxlength="20"><br>
	<input type="submit" name ="botaoSalvar" value="Salvar">
</form>
@endsection
