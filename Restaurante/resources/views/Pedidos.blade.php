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
                <li><a href="/fornecedores">Fornecedores </a></li>
                <li><a href="/Relatorios">Relatorio</a></li>
                <li><a href="/Cadatrar_Produtos">Produtos</a></li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <h1>Realizar Pedido</h1>

        <form>
            <div class="form-group">
                <label for="Nome_Cliente">Nome:</label>
                <input type="text" id="Nome_Cliente" name="Nome_Cliente" required>
            </div>
            <div class="form-group">
                <label for="Telefone">Telefone:</label>
                <input type="tel" id="Telefone" name="Telefone" required>
            </div>
            <div class="form-group">
                <label for="Endereco">Endereço:</label>
                <input type="text" id="Endereco" name="Endereco" required>
            </div>
            <div class="form-group">
                <label for="prato">Selecione o Prato:</label>
                <select id="prato" name="prato" required>
                    <option value="">Escolha um prato</option>
                    @foreach($ListarPratos as $prato)
                    <option value="{{ $prato->nome_produto }}">{{ $prato->nome_produto }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="Quantidade">Quantidade:</label>
                <input type="number" id="Quantidade" name="Quantidade" min="1" required>
            </div>
            <div class="form-group">
                <label for="pedido">Detalhes Adicionais:</label>
                <textarea id="pedido" name="pedido" rows="4" placeholder="Especifique preferências ou observações"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Cadastrar pedidos</button>
            </div>
        </form>
    </div>

</body>

</html>