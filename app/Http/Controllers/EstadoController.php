<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Pais;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function index()
    {
        $estados = Estado::with('pais')->get();
        return view('estado.index', compact('estados'));
    }

    public function create()
    {
        $paises = Pais::all();
        return view('estado.create', compact('paises'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sigla' => 'required|string|max:2|unique:estados,sigla',
            'nome' => 'required|string',
            'pais_codigo' => 'required|exists:paises,codigo',
        ]);

        Estado::create($request->all());
        return redirect()->route('estado.index');
    }

    public function edit($sigla)
    {
        $estado = Estado::findOrFail($sigla);
        $paises = Pais::all();
        return view('estado.edit', compact('estado', 'paises'));
    }

    public function update(Request $request, $sigla)
    {
        $estado = Estado::findOrFail($sigla);
        $request->validate([
            'nome' => 'required|string',
            'pais_codigo' => 'required|exists:paises,codigo',
        ]);

        $estado->update($request->only('nome', 'pais_codigo'));
        return redirect()->route('estado.index');
    }

    public function destroy($sigla)
    {
        Estado::destroy($sigla);
        return redirect()->route('estado.index');
    }
}
