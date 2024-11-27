<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
            font-family: 'Arial', sans-serif;
        }

        .login-container {
            background-color: black;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            color: white;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: white;
        }

        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #007BFF;
            outline: none;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        .login-button:hover {
            background-color: #0056b3;
        }

        .register-link {
            display: block;
            margin-top: 15px;
            color: #00f2fe;
            text-decoration: none;
            font-size: 14px;
        }

        .register-link:hover {
            text-decoration: underline;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 14px;
            text-align: center;
        }

        .alert-success {
            background-color: #28a745;
            color: white;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h1>Login</h1>

        <!-- Exibir mensagem de sucesso -->
        @if(session('success'))
        <div class="alert alert-success" id="success-message">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('login') }}" method="POST"> <!-- Alterado para 'login' -->
            @csrf
            <div class="input-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email cadastrado" required>
            </div>
            <div class="input-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="login-button">Login</button>
            <a href="{{ route('register') }}" class="register-link">Ainda não tem cadastro? Clique aqui</a>
        </form>
    </div>

    <script>
        // Remove a mensagem de sucesso após 5 segundos (5000ms)
        setTimeout(() => {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.style.transition = "opacity 0.5s ease";
                successMessage.style.opacity = 0;
                setTimeout(() => successMessage.remove(), 500); // Remove o elemento após o fade-out
            }
        }, 5000);
    </script>
</body>

</html>
