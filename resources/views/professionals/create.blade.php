<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de profissionais </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<div class="form-container">
    <h1>Cadastrar Profissional</h1>
    <form action="{{ route('professionals.store') }}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" placeholder="Dgite seu nome aqui!" required>
        <p></p>
        <label for="category">Especialidade:</label>
        <input type="text" id="category" name="category" placeholder="Digite a sua principal especialidade!" required>
        <p></p>
        <label for="city">Cidade:</label>
        <input type="text" id="city" name="city" placeholder="Digite aqui a sua cidade!" required>
        <p></p>
        <label for="contact">Contato:</label>
        <input type="text" id="contact" name="contact" placeholder="Digite seu número de telefone!" required>
        <p></p>
        <label for="description">Descrição:</label>
        <textarea id="description" name="description"></textarea>
        <p></p>
        <label for="photos">Fotos de Trabalhos:</label>
        <input type="file" id="photos" name="photos[]" multiple>
        <p></p>
        <button type="submit" class="blue-button">Salvar</button>
        <button class="blue-button" style="margin-left: 10px;">
            <a href="/" style="text-decoration: none; color: white;">Voltar</a>
        </button>



    </form>
</div>

</html>