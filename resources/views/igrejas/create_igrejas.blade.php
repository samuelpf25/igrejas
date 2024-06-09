@extends('layouts.main')

@section('title','Cadastro Igreja')

@section('content')

<div class="container mt-5">
    <h1>Cadastrar Igreja</h1>
    <form action="{{ route('igrejas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-control" id="estado" name="estado" required></select>
            <input type="hidden" id="estado_nome" name="estado_nome">
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade</label>
            <select class="form-control" id="cidade" name="cidade" required></select>
            <input type="hidden" id="cidade_nome" name="cidade_nome">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<script>
$(document).ready(function() {
    $('#estado').select2({
        placeholder: 'Selecione um estado',
        ajax: {
            url: 'https://servicodados.ibge.gov.br/api/v1/localidades/estados',
            dataType: 'json',
            processResults: function (data) {
                // Ordena os estados pelo nome antes de retornar os resultados
                data.sort(function(a, b) {
                    return a.nome.localeCompare(b.nome);
                });
                return {
                    results: data.map(function(item) {
                        return {
                            id: item.id, // Use item.id como id para a próxima API call
                            text: item.nome // Use item.nome como texto
                        };
                    })
                };
            }
        }
    });

    $('#estado').on('change', function() {
        var estadoId = $(this).val(); // Use o ID do estado selecionado
        var estadoNome = $('#estado option:selected').text(); // Nome do estado selecionado
        $('#estado_nome').val(estadoNome); // Define o valor do campo oculto com o nome do estado

        $('#cidade').select2({
            placeholder: 'Selecione uma cidade',
            ajax: {
                url: 'https://servicodados.ibge.gov.br/api/v1/localidades/estados/' + estadoId + '/municipios',
                dataType: 'json',
                processResults: function (data) {
                    // Ordena as cidades pelo nome antes de retornar os resultados
                    data.sort(function(a, b) {
                        return a.nome.localeCompare(b.nome);
                    });
                    return {
                        results: data.map(function(item) {
                            return {
                                id: item.nome, // Use item.nome como id
                                text: item.nome // Use item.nome como texto
                            };
                        })
                    };
                }
            }
        }).val(null).trigger('change');
    });

    $('#cidade').on('change', function() {
        var cidadeNome = $('#cidade option:selected').text(); // Nome da cidade selecionada
        $('#cidade_nome').val(cidadeNome); // Define o valor do campo oculto com o nome da cidade
    });
});
</script>
@endsection