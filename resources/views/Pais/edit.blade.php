@extends('layout')

@section('content')
    <h2>Alterar País</h2>

    <form action="{{ route('pais.update', $pais->codigo) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $pais->nome) }}" required>
        </div>

        <div class="mb-3">
            <label for="sigla" class="form-label">Sigla</label>
            <input type="text" name="sigla" id="sigla" class="form-control" value="{{ old('sigla', $pais->sigla) }}" required maxlength="3">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('pais.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
