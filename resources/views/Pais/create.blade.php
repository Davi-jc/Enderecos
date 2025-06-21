@extends('layout')

@section('content')
    <h2>Novo País</h2>

    <form action="{{ route('pais.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="sigla" class="form-label">Sigla</label>
            <input type="text" name="sigla" id="sigla" class="form-control" required maxlength="3">
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('pais.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
