<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedores</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cadastro_de_fornecedores.css') }}">
</head>
<body>
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="/Menu">Início</a></li>
                <li><a href="#">Cardápio</a></li>
                <li><a href="#">Reservas</a></li>
                <li><a href="#">Cadastro de Fornecedores</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <h1>Cadastro de Fornecedores</h1>
        <form>
            <div class="form-group">
                <label for="nome-fornecedor">Nome da Empresa:</label>
                <input type="text" id="nome-fornecedor" name="nome-fornecedor" required>
            </div>
            <div class="form-group">
                <label for="cnpj">CNPJ:</label>
                <input type="text" id="cnpj" name="cnpj" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="number" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <button type="submit">Cadastrar Fornecedor</button>
            </div>
        </form>
    </div>
</body>
</html>

