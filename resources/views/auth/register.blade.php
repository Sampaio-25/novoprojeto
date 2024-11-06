<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
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

        .register-container {
            background-color: black;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 550px;
            text-align: center;
            margin-top: 5px;
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

        .register-button {
            width: 50%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            margin-top: 5px;
        }

        .register-button:hover {
            background-color: #0056b3;
        }

        .login-link {
            display: block;
            margin-top: 15px;
            color: #00f2fe;
            text-decoration: none;
            font-size: 14px;
        }

        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <h1>Cadastro de Usuário</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" placeholder="Digite aqui seu nome completo" required>
            </div>
            <div class="input-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu melhor email" required>
            </div>
            <div class="input-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" placeholder="Crie uma senha para login" required>
            </div>
            <div class="input-group">
                <label for="password_confirmation">Confirme a Senha:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirme sua senha" required>
            </div>
            <button type="submit" class="register-button">Cadastrar</button>
            <a href="{{ route('login') }}" class="login-link">Já tem cadastro? Clique aqui</a>
        </form>
    </div>
</body>

</html>
