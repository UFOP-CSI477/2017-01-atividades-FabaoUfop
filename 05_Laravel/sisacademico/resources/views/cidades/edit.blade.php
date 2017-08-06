@extends('principal')
@section('conteudo')
<h1>Editar cidade</h1>
<a href="/cidades/{{$cidade->id}}">Voltar</a> <br><br>

<form method="post" action="/cidades/{{$cidade->id}}">
  <!--token identificador -->
  {{csrf_field()}}
  <!-- muda o filtro da rota do metodo post -->
  {{method_field('PATCH')}}

Nome: <input type="text" name="nome" value="{{$cidade->nome}}" > <br>
Estado:
            <select name="estado_id" value="{{$cidade->estado->id}}">
              <option value="">Selecione:</option>
            <!-- dados dos Estados-->
            @foreach ($estados as $e)
            <option value="{{$e->id}}"
                @if( $e->id == $cidade->estado_id)
                    selected="selected"
                @endif
                >{{$e->nome}}-{{$e->sigla}}<option>
            @endforeach
            </select>
            <input type="submit" name="botaoSalvar" value="Salvar">
</form>

@endsection
