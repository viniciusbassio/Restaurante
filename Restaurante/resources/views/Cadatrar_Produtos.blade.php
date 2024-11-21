<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Cadastro_de_produtos.css') }}">
</head>
<body>
    <div class="navbar">
        <nav>
        <ul>
                <li><a href="/">Início</a></li>
                <li><a href="/Cardapio">Cardápio</a></li>
                <li><a href="/Cadastrar/Pedidos">Pedidos</a></li>
                <li><a href="/fornecedores/cadastrar">Fornecedor</a></li>
                <li><a href="/Relatorios">Relatorio</a></li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <h1>Cadastro de Produtos</h1>
        <form>
            <div class="form-group">
                <label for="nome">Nome do Produto:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" id="descricao" name="descricao">
            </div>
            <div class="form-group">
                <label for="preco">Preço (R$):</label>
                <input type="number" id="preco" name="preco" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" name="categoria">
            </div>
            <div class="form-group">
                <button type="submit">Cadastrar Produto</button>
            </div>
        </form>
    </div>
</body>
</html>
