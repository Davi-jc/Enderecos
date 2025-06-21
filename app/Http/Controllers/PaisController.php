<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index()
    {
        $paises = Pais::all();
        return view('pais.index', compact('paises'));
    }

    public function create()
    {
        return view('pais.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'sigla' => 'required|string|max:3',
        ]);

        Pais::create($request->all());
        return redirect()->route('pais.index');
    }

    public function edit($id)
    {
        $pais = Pais::findOrFail($id);
        return view('pais.edit', compact('pais'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string',
            'sigla' => 'required|string|max:3',
        ]);

        $pais = Pais::findOrFail($id);
        $pais->update($request->all());
        return redirect()->route('pais.index');
    }

    public function destroy($id)
    {
        Pais::destroy($id);
        return redirect()->route('pais.index');
    }
}
