@extends('layout')

@section('content')
    <h2>Lista de Países</h2>
    <a href="{{ route('pais.create') }}" class="btn btn-success mb-3">Novo País</a>
    <a href="{{ url('/') }}" class="btn btn-outline-dark mb-3">← Voltar ao Início</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Sigla</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paises as $pais)
                <tr>
                    <td>{{ $pais->nome }}</td>
                    <td>{{ $pais->sigla }}</td>
                    <td class="table-actions">
                        <a href="{{ route('pais.edit', $pais->codigo) }}" class="btn btn-primary btn-sm">Editar</a>

                        <form action="{{ route('pais.destroy', $pais->codigo) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Deseja excluir?')">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
