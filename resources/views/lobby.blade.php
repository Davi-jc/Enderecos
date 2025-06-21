@extends('layout')

@section('content')
    <div class="text-center">
        <h2>Bem-vindo ao Sistema de Países e Estados</h2>
        <p class="mt-4">Escolha uma das opções abaixo:</p>

        <div class="d-flex justify-content-center gap-3 mt-4">
            <a href="{{ route('pais.index') }}" class="btn btn-primary btn-lg">Gerenciar Países</a>
            <a href="{{ route('estado.index') }}" class="btn btn-secondary btn-lg">Gerenciar Estados</a>
        </div>
    </div>
@endsection
