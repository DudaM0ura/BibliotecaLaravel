<?php

namespace App\Http\Controllers;

use App\Models\Biblioteca;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{

    public function index()
    {
        $biblioteca = Biblioteca::get();
        return view('index', compact('biblioteca'));
    }


    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        Biblioteca::create($request->all());
        return redirect()->route('biblioteca.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
