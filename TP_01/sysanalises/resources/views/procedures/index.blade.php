@extends('principal')
@section('conteudo')
<h1>Procedimentos</h1>
<a class="btn btn-primary" href="/procedures/create">Inserir</a>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Editar</th>
      <th>Excluir</th>
    </tr>
  </thead>
  <tbody>
@foreach($procedures as $p)
<tr>
  <td>{{ $p->id }}</td>
  <td>{{ $p->nome }}</td>
  <td>{{ $p->preco }}</td>
  <td><a href="/procedures/{{ $p->id }}/edit"><i class="fa fa-pencil fa-fw"></i>Editar</a></td>
  <td><a href="/procedures/{{ $p->id }}"><i class="fa fa-trash-o fa-fw"></i> Excluir</a></td>
</tr>
@endforeach
</tbody>
</table>
@endsection
