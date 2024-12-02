@extends('layouts.app')

@section('content')
    <h1>Detalhes do Profissional</h1>

    <div class="professional-profile">
        <h2>{{ $professional->name }}</h2>
        <p><strong>Categoria:</strong> {{ $professional->category }}</p>
        <p><strong>Contato:</strong> {{ $professional->contact }}</p>
        <p><strong>Cidade:</strong> {{ $professional->city }}</p>
        <p><strong>Descrição:</strong> {{ $professional->description ?? 'Nenhuma descrição disponível.' }}</p>

        <h3>Fotos de Trabalhos:</h3>
        <div class="photos" style="display: flex; flex-wrap: wrap; gap: 10px;">
            @if ($professional->photos && is_array(json_decode($professional->photos, true)))
                @foreach (json_decode($professional->photos) as $photo)
                    <img src="{{ asset('storage/' . str_replace('\\', '/', $photo)) }}"
                         alt="Foto do trabalho"
                         style="width: 150px; height: auto; border: 1px solid #ccc; padding: 5px;">
                @endforeach
            @else
                <p>Nenhuma foto disponível.</p>
            @endif
        </div>


        <a href="{{ route('categories.show', $professional->category) }}">Voltar para a categoria</a>
    </div>
@endsection
