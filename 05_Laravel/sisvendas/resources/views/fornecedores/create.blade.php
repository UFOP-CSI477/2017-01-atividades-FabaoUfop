@extends('principal')
@section('conteudo')
<h1>Inserir Fornecedores</h1>
<form method ="post" action="/fornecedores">
  <!-- comando para reconhecer o cliente -->
  {{csrf_field()}}

	Nome: <input type = "text" name ="nome" maxlenght="100"><br>
	Nome Fantasia: <input type="text"  name="nomeFantasia"  maxlength="100"><br>
  Telefone:<input type="text" name="telefone" maxlength="15"><br>

	<input type="submit" name ="botaoSalvar" value="Salvar">

</form>

@endsection
