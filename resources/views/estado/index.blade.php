@extends('layout')

@section('content')
    <h2>Lista de Estados</h2>
    <a href="{{ route('estado.create') }}" class="btn btn-success mb-3">Novo Estado</a>
    <a href="{{ url('/') }}" class="btn btn-outline-dark mb-3">← Voltar ao Início</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sigla</th>
                <th>Nome</th>
                <th>País</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estados as $estado)
                <tr>
                    <td>{{ $estado->sigla }}</td>
                    <td>{{ $estado->nome }}</td>
                    <td>{{ $estado->pais->nome ?? 'N/A' }}</td>
                    <td class="table-actions">
                        <a href="{{ route('estado.edit', $estado->sigla) }}" class="btn btn-primary btn-sm">Editar</a>

                        <form action="{{ route('estado.destroy', $estado->sigla) }}" method="POST" class="inline">
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
