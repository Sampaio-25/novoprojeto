<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Minha Aplicação')</title>
    <style>
        /* Fundo escuro */
        body {
            background-color: #1a1a1a;
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Centralizando os elementos */
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 80vh;
            padding: 20px;
        }

        /* Estilo para o cartão do perfil */
        .profile-card {
            background-color: #2a2a2a;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            padding: 30px;
            width: 90%;
            max-width: 500px;
            text-align: center;
        }

        /* Título principal */
        .profile-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: white;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        /* Nome em destaque */
        .profile-name {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #ffffff;
        }

        /* Detalhes do perfil */
        .profile-detail {
            font-size: 1.2rem;
            margin-bottom: 15px;
            text-align: left; /* Informações alinhadas à esquerda */
        }

        /* Botões ou links */
        button,
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1rem;
            color: #ffffff;
            background-color: #00bcd4;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover,
        a:hover {
            background-color: #028da2;
        }
    </style>
</head>
<body>
    <main>
        <div class="profile-card">
            <h1 class="profile-title">Perfil do Profissional</h1>
            <h2 class="profile-name">{{ $professional->name }}</h2>
            <p class="profile-detail"><strong>Especialidade:</strong> {{ $professional->category }}</p>
            <p class="profile-detail"><strong>Descrição:</strong> {{ $professional->description }}</p>
            <p class="profile-detail"><strong>Contato:</strong> {{ $professional->contact }}</p>
            <p class="profile-detail"><strong>Fotos de trabalhos:</strong> {{ $professional->fotos }}</p>
            <nav>
            <a href="{{ url('/') }}" style="color: #fff; text-decoration: none;">Voltar</a>
        </nav>
        </div>
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Todos os direiros reservados!</p>
    </footer>
</body>
</html>
