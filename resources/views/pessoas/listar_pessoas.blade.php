@extends('layouts.main')

@section('title','Cadastro')

@section('content')
<h2>Pessoas Cadastradas</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Pessoas as $Pessoa)
        <tr>
            <td>{{ $Pessoa->id }}</td>
            <td>{{ $Pessoa->nome }}</td>
            <td>{{ $Pessoa->endereco }}</td>
            <td>{{ $Pessoa->telefone }}</td>
            <td>{{ $Pessoa->email }}</td>
            <td>
                <!--<a href="{{ route('pessoas.edit', $Pessoa->id) }}" class="btn btn-warning">Editar</a>-->
                <form action="{{ route('pessoas.destroy', $Pessoa->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection