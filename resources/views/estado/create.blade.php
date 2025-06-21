@extends('layout')

@section('content')
    <h2>Novo Estado</h2>

    <form action="{{ route('estado.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="sigla" class="form-label">Sigla</label>
            <input type="text" name="sigla" id="sigla" class="form-control" required maxlength="2">
        </div>

        <div class="mb-3">
            <label for="pais_codigo" class="form-label">País</label>
            <select name="pais_codigo" id="pais_codigo" class="form-control" required>
                <option value="">Selecione o país</option>
                @foreach ($paises as $pais)
                    <option value="{{ $pais->codigo }}">{{ $pais->nome }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('estado.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
