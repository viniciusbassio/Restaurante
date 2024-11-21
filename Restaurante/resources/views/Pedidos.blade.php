<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Pedido</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/pedidos.css') }}">
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
        <h1>Realizar Pedido</h1>
        <form>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
            </div>
            <div class="form-group">
                <label for="prato">Selecione o Prato:</label>
                <select id="prato" name="prato" required>
                    <option value="" disabled selected>Escolha um prato</option>
                    <option value="pizza">Pizza Margherita</option>
                    <option value="hamburguer">Hambúrguer Artesanal</option>
                    <option value="sushi">Combinado de Sushi</option>
                    <option value="salada">Salada Caesar</option>
                    <option value="lasanha">Lasanha Bolonhesa</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="number" id="quantidade" name="quantidade" min="1" required>
            </div>
            <div class="form-group">
                <label for="pedido">Detalhes Adicionais:</label>
                <textarea id="pedido" name="pedido" rows="4" placeholder="Especifique preferências ou observações"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Enviar Pedido</button>
            </div>
        </form>
    </div>
</body>
</html>
