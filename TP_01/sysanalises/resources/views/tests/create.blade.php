@extends('principal')
@section('conteudo')
<h1>Inserir Testes</h1>
<form method ="post" action="/tests">
  <!-- comando para reconhecer o cliente -->
  {{csrf_field()}}
	Data: <input type = "text" name ="data" maxlenght="100"><br>
	<input type="submit" name ="botaoSalvar" value="Salvar">
</form>
@endsection
