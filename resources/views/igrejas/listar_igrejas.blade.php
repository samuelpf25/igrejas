@extends('layouts.main')

@section('title','Igrejas')

@section('content')
<h2>Igrejas</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Endereço</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        @foreach($igrejas as $igreja)
        <tr>
            <td>{{ $igreja->id }}</td>
            <td>{{ $igreja->nome }}</td>
            <td>{{ $igreja->cidade }}</td>
            <td>{{ $igreja->estado }}</td>
            <td>{{ $igreja->endereco }}</td>
            <td>
                <form action="{{ route('igrejas.destroy', $igreja->id) }}" method="POST" style="display:inline;">
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