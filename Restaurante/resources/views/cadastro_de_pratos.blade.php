<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pratos</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cadastro_de_pratos.css') }}">
</head>
<body>
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Cardápio</a></li>
                <li><a href="#">Pedidos</a></li>
                <li><a href="#">Estoque</a></li>
                <li><a href="#">Fornecedor</a></li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <h1>Cadastro de Pratos</h1>
        <form>
            <div class="form-group">
                <label for="nome_prato">Nome do Prato:</label>
                <input type="text" id="nome_prato" name="nome_prato" placeholder="Ex: Feijoada" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" rows="4" placeholder="Descrição detalhada do prato" required></textarea>
            </div>
            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="number" id="preco" name="preco" step="0.01" min="0" required>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <select id="categoria" name="categoria" required>
                    <option value="" disabled selected>Escolha a categoria</option>
                    <option value="prato_principal">Prato Principal</option>
                    <option value="sobremesa">Sobremesa</option>
                    <option value="bebida">Bebida</option>
                    <option value="aperitivo">Aperitivo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="imagem">Imagem do Prato:</label>
                <input type="file" id="imagem" name="imagem" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="disponibilidade">Disponibilidade:</label>
                <input type="checkbox" id="disponibilidade" name="disponibilidade">
                <label for="disponibilidade">Disponível</label>
            </div>
            <div class="form-group">
                <button type="submit">Cadastrar Prato</button>
            </div>
        </form>
    </div>
</body>
</html>
