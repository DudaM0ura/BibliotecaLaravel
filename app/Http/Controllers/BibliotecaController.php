<?php

namespace App\Http\Controllers;

use App\Models\Biblioteca;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{

    public function index()
    {
        $obra = Biblioteca::all();
        return view('index', compact('obra'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Biblioteca::create($request->all());
        return redirect()->route('biblioteca.index')->with('message','Livro cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $livro = Biblioteca::find($id);
        return view('edit', compact('livro'));
    }

    public function update(Request $request, $id)
    {
        $livro = Biblioteca::find($id);
        $livro->update($request->all());

        return redirect()->route('biblioteca.index')->with('message','Livro atualizado com sucesso!');

    }

    public function destroy($id)
    {
        Biblioteca::destroy($id);
        return redirect()->route('biblioteca.index')->with('message','Livro deletado com sucesso!');
    }
}
