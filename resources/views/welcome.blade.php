<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Home da Aplicação</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    @if (session('success'))
    <div id="success-message" class="alert alert-success custom-alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="container">
        <div class="welcome-section" style="text-align: center; padding: 50px;">
            <h1>Bem-vindo ao seu site de busca de profissionais!</h1>
            <p class="description">
                Nosso objetivo é facilitar a sua vida, oferecendo uma plataforma intuitiva para encontrar profissionais
                qualificados em diversas áreas, como eletricistas, encanadores, jardineiros, e muito mais. Cada profissional
                é cuidadosamente verificado, garantindo qualidade e confiança nos serviços prestados. Seja para um projeto
                grande ou uma pequena tarefa do dia a dia, temos o profissional ideal esperando por você. Explore nossas
                categorias e comece a transformar suas ideias em realidade com apenas alguns cliques!
            </p>
        </div>

        <h1 style="text-align:center; margin-top: 20px;">A busca pelo profissional ideal começa aqui!</h1>
        <p class="instruction-text">Escolha a categoria do profissional que você necessita, click nela e verá profissionais perto de você!</p>
        <div class="profession-buttons" style="text-align:center;">
            <a href="{{ route('categories.show', 'eletricista') }}">Eletricista</a>
            <a href="{{ route('categories.show', 'encanador') }}">Encanador</a>
            <a href="{{ route('categories.show', 'pedreiro') }}">Pedreiro</a>
            <a href="{{ route('categories.show', 'mecanico') }}">Mecânico</a>
            <a href="{{ route('categories.show', 'servente') }}">Servente</a>
            <a href="{{ route('categories.show', 'calheiro') }}">Calheiro</a>
            <a href="{{ route('categories.show', 'carpinteiro') }}">Carpinteiro</a>
            <a href="{{ route('categories.show', 'marceneiro') }}">Marceneiro</a>
            <a href="{{ route('categories.show', 'jardineiro') }}">Jardineiro</a>
            <a href="{{ route('categories.show', 'seguranca') }}">Segurança</a>
            <a href="{{ route('categories.show', 'boracheirro') }}">Boracheirro</a>
            <a href="{{ route('categories.show', 'auxiliar') }}">Auxiliar</a>
            <a href="{{ route('categories.show', 'baba') }}">Babá</a>
            <a href="{{ route('categories.show', 'diarista') }}">Diarista</a>
            <a href="{{ route('categories.show', 'costureira') }}">Costureira</a>
            <a href="{{ route('categories.show', 'cuidadora') }}">Cuidadora</a>
            <a href="{{ route('categories.show', 'cozinheira') }}">Cozinheira</a>
            <a href="{{ route('categories.show', 'vendedora') }}">Vendedora</a>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const message = document.getElementById('success-message');
                if (message) {
                    setTimeout(() => {
                        message.style.display = 'none';
                    }, 5000);
                }
            });
        </script>

        <div class="menu" style="text-align: center; margin-top: 50px;"> <!-- Ajuste da margem superior -->
            <h2 class="menu-question">Quer ser um profissional cadastrado?</h2>
            <h2 class="menu-question-2">
                <a href="/professionals/register">Então clique aqui!</a>
            </h2>
        </div>

        <!-- Seção de Rodapé -->
        <footer class="footer">
            <div class="footer-columns">
                <div class="footer-column">
                    <h3>Institucional</h3>
                    <a href="#">Quem Somos</a>
                    <a href="/politicadeprivacidade">Política de Privaciade</a>
                    <a href="#">Nossos Parceiros</a>
                </div>
                <div class="footer-column">
                    <h3>Contate-nos </h3>
                    <a href="#">WhatsApp</a>
                    <a href="#">Facebook</a>
                    <a href="#">Instagram</a>
                </div>
                <div class="footer-column">
                    <h3>Visão de Negocio</h3>
                    <a href="#">Nossa Missão</a>
                    <a href="#">Segurança & Privaciade</a>
                    <a href="#">Novidades Futuras</a>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>