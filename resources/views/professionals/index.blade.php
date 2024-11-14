<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profissionais: {{ $category }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="category-container"> <!-- Classe modificada aqui -->
        <h1>Profissionais da Categoria: {{ ucfirst($category) }}</h1>

        @if ($professionals->isEmpty())
            <p>Nenhum profissional encontrado nessa categoria.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cidade</th>
                        <th>Contato</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($professionals as $professional)
                    <tr>
                        <td>
                            <!-- Aqui o nome do profissional é linkável para a página de detalhes -->
                            <a href="{{ route('professional.show', $professional->id) }}">
                                {{ $professional->name }}
                            </a>
                        </td>
                        <td>{{ $professional->city }}</td>
                        <td>{{ $professional->contact }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <!-- Botão de Voltar para a tela Welcome -->
        <button class="blue-button" style="margin-top: 20px;">
            <a href="/" style="text-decoration: none; color: white;">Voltar a tela inicial</a>
        </button>
    </div>
</body>

</html>
