@extends('principal')

@section('conteudo')

<h1>Fornecedores</h1>
<tbody>
<table>

@foreach($fornecedores as $f)
<tr>
<td>{{$f->id}} </td>
<td>{{$f->nome}} </td>
<td>{{$f->nomeFantasia}}</td>
<td>{{$f->telefone}}</td>
<td><a href="/fornecedores/{{$f->id}}/edit">Editar</a></td>
<td><a href="/fornecedores/{{$f->id}}">Excluir</a></td>
</tr>
@endforeach
</table>
</tbody>
@endsection
