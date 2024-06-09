<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Igreja;
use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Pessoas = Pessoa::all();
        return view('pessoas.listar_pessoas', compact('Pessoas'));
    }

    public function create()
    {
        $igrejas = Igreja::all();
        return view('pessoas.create_pessoas', compact('igrejas'));
    }

    public function store(Request $request)
    {
        try {
            $Pessoa = new Pessoa();
            $Pessoa->nome = $request->nome;
            $Pessoa->endereco = $request->endereco;
            $Pessoa->telefone = $request->telefone;
            $Pessoa->dataNascimento = $request->dataNascimento;

            $imageName = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('img/fotos'), $imageName);
            $Pessoa->foto = $imageName;

            $Pessoa->estadoCivil = $request->estadoCivil;
            $Pessoa->sexo = $request->sexo;
            $Pessoa->email = $request->email;
            $Pessoa->ativo = $request->ativo;
            $Pessoa->login = $request->login;
            $Pessoa->senha = $request->senha;
            $Pessoa->igreja_id = $request->igreja_id;
            $Pessoa->save();

            return redirect()->route('pessoas.index')->with('success', 'Pessoa cadastrada com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('pessoas.index')->with('error', 'Falha ao cadastrar pessoa. ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $Pessoa = Pessoa::findOrFail($id);
        return view('pessoas.show', compact('Pessoa'));
    }

    public function edit($id)
    {
        $Pessoa = Pessoa::findOrFail($id);
        return view('pessoas.edit', compact('Pessoa'));
    }

    public function update(Request $request, $id)
    {
        try {
            $Pessoa = Pessoa::findOrFail($id);
            $Pessoa->nome = $request->nome;
            $Pessoa->endereco = $request->endereco;
            $Pessoa->telefone = $request->telefone;
            $Pessoa->dataNascimento = $request->dataNascimento;
            if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
                $imageName = time() . '.' . $request->foto->extension();
                $request->foto->move(public_path('img/fotos'), $imageName);
                $Pessoa->foto = $imageName;
            }
            $Pessoa->estadoCivil = $request->estadoCivil;
            $Pessoa->sexo = $request->sexo;
            $Pessoa->email = $request->email;
            $Pessoa->ativo = $request->ativo;
            $Pessoa->login = $request->login;
            $Pessoa->senha = $request->senha;
            $Pessoa->igreja_id = $request->igreja_id;
            $Pessoa->save();

            return redirect()->route('pessoas.index')->with('success', 'Pessoa atualizada com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('pessoas.index')->with('error', 'Falha ao atualizar pessoa. ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $Pessoa = Pessoa::findOrFail($id);
        $Pessoa->delete();

        return redirect()->route('pessoas.index');
    }
}
