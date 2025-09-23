<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use Illuminate\Http\Request;

class MotoController extends Controller
{
    public function index()
    {
        $motos = Moto::latest()->paginate(5);
        return view('motos.index', compact('motos'));
    }

    public function create()
    {
        return view('motos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'ano' => 'required',
            'cor' => 'required',
            'preco' => 'required|numeric',
        ]);

        Moto::create($request->all());

        return redirect()->route('motos.index')
                        ->with('success', 'Moto cadastrada com sucesso!');
    }

    public function show(Moto $moto)
    {
        return view('motos.show', compact('moto'));
    }

    public function edit(Moto $moto)
    {
        return view('motos.edit', compact('moto'));
    }

    public function update(Request $request, Moto $moto)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'ano' => 'required',
            'cor' => 'required',
            'preco' => 'required|numeric',
        ]);

        $moto->update($request->all());

        return redirect()->route('motos.index')
                        ->with('success', 'Moto atualizada com sucesso!');
    }

    public function destroy(Moto $moto)
    {
        $moto->delete();

        return redirect()->route('motos.index')
                        ->with('success', 'Moto removida com sucesso!');
    }
}

