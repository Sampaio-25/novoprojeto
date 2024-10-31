<!-- resources/views/politicas.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Políticas de Privacidade</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <style>
        body {
            background-color: black; /* Cor de fundo preto */
            color: white; /* Texto branco */
        }

        .container {
            max-width: 800px; /* Largura máxima do conteúdo */
            margin: 20px auto; /* Centraliza o conteúdo */
            padding: 20px; /* Espaçamento interno */
            background-color: rgba(255, 255, 255, 0.1); /* Fundo levemente branco para destacar o texto */
            border-radius: 10px; /* Bordas arredondadas */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5); /* Sombra ao redor do container */
        }

        .blue-button {
            background-color: blue;
            color: white;
            border: none;
            padding: 12px 25px; /* Aumentando o tamanho do botão */
            border-radius: 5px; /* Bordas arredondadas */
            cursor: pointer;
            text-decoration: none; /* Remove o sublinhado */
            display: inline-block; /* Para centralização */
            margin-top: 20px; /* Espaçamento acima do botão */
            text-align: center; /* Centraliza o texto no botão */
            width: 50%; /* Faz o botão ocupar toda a largura do container */
            margin-left: 150phppx;
        }
    </style>

    <div class="container">
        <h1>Políticas de Privacidade</h1>
        <p><strong>Última atualização: 31/10/2024</strong></p>

        <h2>1. Informações que Coletamos</h2>
        <p>
            Coletamos informações pessoais que você nos fornece voluntariamente ao se registrar no nosso site,
            ao preencher formulários ou ao interagir com nossos serviços. Isso pode incluir, mas não se limita a:
        </p>
        <ul>
            <li>Seu Nome</li>
            <li>Sua especialidade</li>
            <li>Cidade onde reside</li>
            <li>Contato</li>
            <li>Informações de contato adicionais</li>
        </ul>

        <h2>2. Uso das Informações</h2>
        <p>
            Usamos as informações que coletamos para:
        </p>
        <ul>
            <li>Fornecer, operar e manter nosso site</li>
            <li>Melhorar, personalizar e expandir nossos serviços</li>
            <li>Entender e analisar como você usa nosso site</li>
            <li>Comunicar-se com você, seja diretamente ou através de um de nossos parceiros</li>
            <li>Processar suas transações e enviar-lhe um recibo</li>
            <li>Enviar-lhe e-mails</li>
        </ul>

        <h2>3. Cookies e Tecnologias de Rastreamento</h2>
        <p>
            Utilizamos cookies e tecnologias semelhantes para rastrear a atividade em nosso site e armazenar
            certas informações. Os cookies são arquivos com uma pequena quantidade de dados que podem incluir
            um identificador anônimo.
        </p>

        <h2>4. Compartilhamento de Informações</h2>
        <p>
            Não vendemos, trocamos ou transferimos suas informações pessoais para terceiros, a menos que
            forneçamos aviso prévio.
        </p>

        <h2>5. Segurança das Informações</h2>
        <p>
            A segurança das suas informações é importante para nós, mas nenhum método de transmissão pela
            Internet ou método de armazenamento eletrônico é 100% seguro.
        </p>

        <h2>6. Seus Direitos</h2>
        <p>
            Você tem o direito de acessar, corrigir ou excluir suas informações pessoais.
        </p>

        <h2>7. Alterações a Esta Política</h2>
        <p>
            Podemos atualizar nossa Política de Privacidade de tempos em tempos. Notificaremos você sobre
            quaisquer alterações publicando a nova Política de Privacidade nesta página.
        </p>

        <h2>8. Contato</h2>
        <p>
            Se você tiver alguma dúvida sobre esta Política de Privacidade, entre em contato conosco
            através do e-mail a seguir.
        </p>
        <ul>
            <li>E-mail: 195993@upf.br</li>
        </ul>
        <a class="blue-button" href="/">Voltar à tela inicial</a>
    </div>
</body>
</html>
