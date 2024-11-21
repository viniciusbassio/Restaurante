<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/relatorios.css') }}">
</head>
<body>
    <div class="navbar">
        <nav>
            <ul>
            <li><a href="/">Início</a></li>
                <li><a href="/Cardapio">Cardápio</a></li>
                <li><a href="#">Reservas</a></li>
                <li><a href="#">Estoque</a></li>
                <li><a href="/fornecedores/cadastrar">Fornecedor</a></li>
                <li><a href="/Relatorios">Relatorio</a></li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <h1>Relatórios de Vendas</h1>
        <table class="report-table">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Quantidade de Pedidos</th>
                    <th>Total (R$)</th>
                    <th>Formas de Pagamento</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01/11/2024</td>
                    <td>45</td>
                    <td>R$ 2.500,00</td>
                    <td>Cartão, Dinheiro</td>
                </tr>
                <tr>
                    <td>02/11/2024</td>
                    <td>38</td>
                    <td>R$ 1.900,00</td>
                    <td>Cartão, Pix</td>
                </tr>
                <!-- Mais linhas de exemplo -->
            </tbody>
        </table>
    </div>
</body>
</html>
