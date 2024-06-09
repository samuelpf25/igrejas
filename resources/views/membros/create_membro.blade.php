@extends('layouts.main')

@section('title','Cadastro')

@section('content')

<form action="{{ route('membros.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="pessoa_id" class="form-label">Pessoa</label>
        <select class="form-select" id="pessoa_id" name="pessoa_id">
            <option selected disabled>Selecione uma pessoa</option>
            @foreach($pessoas as $pessoa)
                <option value="{{ $pessoa->id }}">{{ $pessoa->nome }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="celula" class="form-label">Célula</label>
        <input type="text" class="form-control" id="celula" name="celula" required>
    </div>
    <div class="mb-3">
        <label for="vinculo" class="form-label">Vínculo</label>
        <input type="text" class="form-control" id="vinculo" name="vinculo" required>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>


@endsection