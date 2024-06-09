<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Igreja;
use Illuminate\Http\Request;

class IgrejaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $igrejas = Igreja::all();
        return view('igrejas.listar_igrejas', compact('igrejas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('igrejas.create_igrejas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $Igreja = new Igreja();
            $Igreja->nome = $request->nome;
            $Igreja->cidade = $request->cidade_nome;
            $Igreja->estado = $request->estado_nome;
            $Igreja->endereco = $request->endereco;
            $Igreja->save();

            return redirect()->route('igrejas.index')->with('success', 'Igreja cadastrada com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('igrejas.index')->with('error', 'Falha ao cadastrar igreja. ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $Igreja = Igreja::findOrFail($id);
            $Igreja->nome = $request->nome;
            $Igreja->cidade = $request->cidade;
            $Igreja->estado = $request->estado;
            $Igreja->endereco = $request->endereco;
            $Igreja->save();

            return redirect()->route('igrejas.index')->with('success', 'Igreja cadastrada com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('igrejas.index')->with('error', 'Falha ao cadastrar igreja. ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Igreja = Igreja::findOrFail($id);
        $Igreja->delete();

        return redirect()->route('igrejas.index');
    }
}
