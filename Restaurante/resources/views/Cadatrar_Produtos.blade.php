<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="{{ asset('css/Cadastro_de_produtos.css') }}">
</head>
<body>
    <div class="container">
        <img src="/img/logo.png" alt="Logo do Restaurante" class="logo">
        <h1>Cadastro de Produtos</h1>
        <form action="/produtos/cadastrar" method="get">
            <div class="input-group">
                <label for="nome_produto">Nome do Produto:</label>
                <input type="text" id="nome_produto" name="nome_produto" required>
            </div>

            <div class="input-group">
                <label for="descricao_produto">Descrição:</label>
                <textarea id="descricao_produto" name="descricao_produto" rows="3" required></textarea>
            </div>

            <div class="input-group">
                <label for="preco_produto">Preço (R$):</label>
                <input type="number" id="preco_produto" name="preco_produto" required step="0.01">
            </div>

            <div class="input-group">
                <label for="categoria_produto">Categoria:</label>
                <select id="categoria_produto" name="categoria_produto" required>
                    <option value="entrada">Entrada</option>
                    <option value="prato_principal">Prato Principal</option>
                    <option value="sobremesa">Sobremesa</option>
                    <option value="bebida">Bebida</option>
                </select>
            </div>

            <button type="submit">Cadastrar Produto</button>
        </form>
    </div>
</body>
</html>
