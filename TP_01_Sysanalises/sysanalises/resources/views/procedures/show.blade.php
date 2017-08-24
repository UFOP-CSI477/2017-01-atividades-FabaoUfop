@extends('principal')
@section('conteudo')
<div class="jumbotron text-center">
  <h1>Excluir procedimento</h1>
</div>
<a href="/procedures">Voltar</a>
</div>
    <div class="row">
      <div class="col-sm-4">
        <form method ="post" action="/procedures/{{procedures->id}}" class="horizontal">
          <!-- comando para reconhecer o cliente -->
          {{csrf_field()}}
          <!-- conversão do metodo post -->
          {{method_field('DELETE')}}
          <div class="form-group">
            <label for="nome" class="control-label">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome" value="{{$procedures->nome}}">
          </div>
          <div class="form-group">
            <label for="Preco">Preço</label>
            <input type="text" name="preço" class="form-control" placeholder="preço" value="{{$procedures->preco}}">
          </div>
        <input type="submit" value="Confirmar Exclusão">
        </div>
    </div>
@endsection
