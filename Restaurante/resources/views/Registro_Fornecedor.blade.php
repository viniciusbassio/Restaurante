<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Registro_Fornecedor.css') }}">
    <title>Document</title>
</head>
<body>
    <h2 style="text-align: center;">Registro de Fornecedor</h2>
    <form action="/submit" method="post">
        <label for="nome">Nome do Fornecedor:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="cidade">Cidade:</label><br>
        <input type="text" id="cidade" name="cidade" required><br><br>

        <label for="endereco">Endereço:</label><br>
        <input type="text" id="endereco" name="endereco" required><br><br>

        <label for="produto">Produto Fornecido:</label><br>
        <input type="text" id="produto" name="produto" required><br><br>

        <label for="quantidade">Quantidade:</label><br>
        <input type="number" id="quantidade" name="quantidade" required min="1" oninput="this.setCustomValidity('')"><br><br>

        <label for="tipo_produto">Tipo de Produto:</label><br>
        <input type="radio" id="liquido" name="tipo_produto" value="liquido" required>
        <label for="liquido">Líquido</label><br>

        <input type="radio" id="grama" name="tipo_produto" value="grama" required>
        <label for="grama">Gramas</label><br><br>

        <input type="submit" value="Registrar Fornecedor">
    </form>>
</body>
</html>