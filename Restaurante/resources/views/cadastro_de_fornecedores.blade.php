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
                <li><a href="/">Início</a></li>
                <li><a href="/Cardapio">Cardápio</a></li>
                <li><a href="/Cadastrar/Pedidos">Pedidos</a></li>
                <li><a href="/fornecedores">Fornecedores </a></li>
                <li><a href="/Relatorios">Relatorio</a></li>
                <li><a href="/Cadatrar_Produtos">Produtos</a></li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <h1>Cadastro de Fornecedores</h1>
        <form method="get" action="/fornecedores/cadastrar">
            <div class="form-group">
                <label for="Nome_Fornecedor">Nome da Empresa:</label>
                <input type="text" id="Nome_Fornecedor" name="Nome_Fornecedor" required>
            </div>
            <div class="form-group">
                <label for="Cnpj">CNPJ:</label>
                <input type="text" id="Cnpj" name="Cnpj" required>
            </div>
            <div class="form-group">
                <label for="Endereco">Endereço:</label>
                <input type="text" id="Endereco" name="Endereco" required>
            </div>
            <div class="form-group">
                <label for="Telefone">Telefone:</label>
                <input type="number" id="Telefone" name="Telefone" required>
            </div>
            <div class="form-group">
                <button type="submit">Cadastrar Fornecedor</button>
            </div>
        </form>
    </div>
</body>
</html>

