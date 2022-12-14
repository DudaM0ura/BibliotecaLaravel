@extends('layout/app')
@section('conteudo')   
<h2>Biblioteca</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Título</th>
        <th scope="col">Autor</th>
        <th scope="col">ISBN</th>
        <th scope="col">Ano de Lançamento</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($obra as $livro)
      <tr>
        <td>{{$livro->titulo}}</td>
        <td>{{$livro->autor}}</td>
        <td>{{$livro->isbn}}</td>
        <td>{{$livro->ano_lancamento}}</td>
        <td>
          <a class="btn btn-primary" href="{{route('biblioteca.edit', $livro->id)}}">Editar</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection