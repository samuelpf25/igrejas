@extends('layouts.main')

@section('title','Membros')

@section('content')
<h2>Membros</h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Célula</th>
            <th>Vínculo</th>
            <th>Opções</th>
        </tr>
    </thead>
    <tbody>
        @foreach($membros as $membro)
        <tr>
            <td>{{ $membro->pessoa_id }}</td>
            <td>{{ $membro->celula }}</td>
            <td>{{ $membro->vinculo }}</td>
            <td>
                <form action="{{ route('membros.destroy', $membro->pessoa_id) }}" method="POST" style="display:inline;">
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