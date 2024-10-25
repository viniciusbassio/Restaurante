<!DOCTYPE html>
<html lang="en">
<head>
 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Menu.css') }}">
    <title>Cardapio</title>
</head>
<body>
<h1>Cardápio</h1>
<div class="container">

<div class="row">

@foreach($listaProdutos as $prd)

<div class="col s3">

<div class="card">

<div class="card-image waves-effect waves-block waves-light">

<img class="activator" src="images/office.jpg">

</div>

<div class="card-content">

<span class="card-title activator grey-text text-darken-4">{{$prd->nome_produto}} ...</span>

<p><a href="#">Comprar</a></p>

</div>

<div class="card-reveal">

<span class="card-title grey-text text-darken-4">{{$prd->nome_produto}}<i class="material-icons
right">close</i></span>

<p>{{$prd->descricao_produto}}</p>

</div>

</div></div>

@endforeach

</div>

</div>

</body>
</html>