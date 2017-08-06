@extends('principal')

@section('conteudo')

<h1>Produto</h1>

<tbody>
<table>

@foreach($produtos as $p)
<tr>
  <td>{{$p->id}} </td>
  <td>{{$p->nome}} </td>
  <td>{{$p->preco}}</td>
  <td><a href="/produtos/{{$p->id}}/edit">Editar</a></td>
  <td><a href="/produtos/{{$p->id}}">Excluir</a></td>
</tr>
@endforeach
</table>
</tbody>

@endsection
