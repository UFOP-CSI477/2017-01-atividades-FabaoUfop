@extends('principal')
@section('conteudo')
    <div class="jumbotron text-center">
          <h1>Inserir Procedimentos</h1>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <form method ="post" action="/procedures" class="horizontal">
          <!-- comando para reconhecer o cliente -->
          {{csrf_field()}}
              <div class="form-group">
                <label for="nome" class="control-label">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome do Procedimento">
              </div>
              <div class="form-group">
                <label for="preço">Preço</label>
                <input type="text" name="preço" class="form-control" placeholder="Informe o preço">
                <input type="submit" name ="botaoSalvar" value="Salvar">
              </div>
        </div>
    </div>
@endsection
