<!-- resources/views/professionals/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Detalhes do Profissional</h1>

    <div class="professional-profile">
        <h2>{{ $professional->name }}</h2>
        <p><strong>Categoria:</strong> {{ $professional->category }}</p>
        <p><strong>Contato:</strong> {{ $professional->contact }}</p>
        <p><strong>Cidade:</strong> {{ $professional->city }}</p>
        <p><strong>Descrição:</strong> {{ $professional->description }}</p>

        <h3>Fotos de Trabalhos:</h3>
        <div class="photos">
            @if ($professional->photos)
                @foreach (json_decode($professional->photos) as $photo)
                    <img src="{{ asset('storage/' . $photo) }}" alt="Foto do trabalho" style="width: 150px; height: auto; margin-right: 10px;">
                @endforeach
            @else
                <p>Nenhuma foto disponível.</p>
            @endif
        </div>

        <!-- Se precisar de mais campos, adicione-os aqui -->

        <a href="{{ route('categories.show', $professional->category) }}">Voltar para a categoria</a>
    </div>
@endsection
