@extends('principal')
@section('conteudo')
<h1>Testes</h1>
<!--Inserir tabela-->

<tbody>
<table>
@foreach($tests as $t)
<tr>
<td>{{$p->id}} </td>
<td>{{$p->nome}} </td>
<td>{{$p->preco}}</td>
<td><a href="/procedures/{{$p->id}}/edit">Editar</a></td>
<td><a href="/procedures/{{$p->id}}">Excluir</a></td>
</tr>
@endforeach
</table>
</tbody>
@endsection
