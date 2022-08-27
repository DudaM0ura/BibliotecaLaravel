@extends('layout/app')
@section('conteudo')
<form method="POST" action="{{route('biblioteca.update', $livro->id)}}">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Título</label>
      <input type="text" class="form-control" name="titulo" value="{{$livro->titulo}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Autor</label>
      <input type="text" class="form-control" name="autor" value="{{$livro->autor}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">ISBN</label>
      <input type="text" class="form-control" name="isbn" value="{{$livro->isbn}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Ano de lançamento</label>
      <input type="text" class="form-control" name="ano_lancamento" value="{{$livro->ano_lancamento}}">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    <form method="POST" action="{{route('biblioteca.destroy', $livro->id)}}">
        @csrf
        @method('delete')
        <button class="btn btn-danger" id="botaoDeletarLivro" type="submit">Deletar</button>
    </form>
</form>
@endsection