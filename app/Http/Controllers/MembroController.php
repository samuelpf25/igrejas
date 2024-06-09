<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Membro;
use App\Models\Pessoa;

class MembroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $membros = Membro::all();
        return view('membros.listar_membros', compact('membros'));
    }

    public function create()
    {
        $pessoas = Pessoa::all();
        return view('membros.create_membro', compact('pessoas'));
    }

    public function store(Request $request)
    {
        $membro = new Membro();
        $membro->pessoa_id = $request->pessoa_id;
        $membro->celula = $request->celula;
        $membro->vinculo = $request->vinculo;
        $membro->save();

        return redirect()->route('membros.index')->with('success', 'Membro cadastrado com sucesso!');
    }

    public function show($id)
    {
        $membro = Membro::findOrFail($id);
        return view('membros.show', compact('membro'));
    }

    public function edit($id)
    {
        $membro = Membro::findOrFail($id);
        $pessoas = Pessoa::all();
        return view('membros.edit', compact('membro', 'pessoas'));
    }

    public function update(Request $request, $id)
    {
        $membro = Membro::findOrFail($id);
        $membro->pessoa_id = $request->pessoa_id;
        $membro->celula = $request->celula;
        $membro->vinculo = $request->vinculo;
        $membro->save();

        return redirect()->route('membros.index')->with('success', 'Membro atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $membro = Membro::findOrFail($id);
        $membro->delete();

        return redirect()->route('membros.index')->with('success', 'Membro excluído com sucesso!');
    }
}
