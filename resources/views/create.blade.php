@extends('layout/app')
@section('conteudo')
<form method="POST" action="{{route('biblioteca.store')}}">
  @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Título</label>
      <input type="text" class="form-control" name="titulo">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Autor</label>
      <input type="text" class="form-control" name="autor">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">ISBN</label>
      <input type="text" class="form-control" name="isbn">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Ano de lançamento</label>
      <input type="text" class="form-control" name="ano_lancamento">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
@endsection