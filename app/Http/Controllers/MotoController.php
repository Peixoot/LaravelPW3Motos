<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'motor' => 'required',
            'datacad' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        // Upload da foto (se enviada)
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('motos', 'public');
        }

        Moto::create($data);

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
            'motor' => 'required',
            'datacad' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        // Substituir a foto antiga se enviar nova
        if ($request->hasFile('foto')) {
            if ($moto->foto && Storage::disk('public')->exists($moto->foto)) {
                Storage::disk('public')->delete($moto->foto);
            }
            $data['foto'] = $request->file('foto')->store('motos', 'public');
        }

        $moto->update($data);

        return redirect()->route('motos.index')
                        ->with('success', 'Moto atualizada com sucesso!');
    }

    public function destroy(Moto $moto)
    {
        // Excluir foto associada (se existir)
        if ($moto->foto && Storage::disk('public')->exists($moto->foto)) {
            Storage::disk('public')->delete($moto->foto);
        }

        $moto->delete();

        return redirect()->route('motos.index')
                        ->with('success', 'Moto removida com sucesso!');
    }
}
