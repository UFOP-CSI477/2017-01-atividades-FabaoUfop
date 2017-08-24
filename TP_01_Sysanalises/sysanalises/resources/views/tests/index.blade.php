@extends('principal')
@section('conteudo')
<h1>Testes</h1>
<!--Inserir tabela-->
<tbody>
<table>
@foreach($tests as $t)
<tr>
<td>{{$t->id}} </td>
<td>{{$t->nome}} </td>
<td>{{$t->preco}}</td>
<td><a href="/procedures/{{$t->id}}/edit">Editar</a></td>
<td><a href="/procedures/{{$t->id}}">Excluir</a></td>
</tr>
@endforeach
</table>
</tbody>
@endsection
