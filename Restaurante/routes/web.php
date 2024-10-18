<?php

use App\Models\Produtos;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Menu', function () {
    return view('Menu');
});

Route::get('/Cardapio', function () {
    $produtos = new Produtos();
    $produtos = $produtos->listarProdutos();
    return view('pratos',["listaProdutos"=>$produtos]);
});

Route::get('/produtos/cadastrar', function (Request $request) {
    $produtos = new Produtos();   
    $produtos->nomeProduto = $request->formNomeProduto;
    $produtos->gravar($request->formNomeProduto,$request->formFornecedorProduto);
    
    return view('produtos',["dado"=> $request->formNomeProduto]);
    
    });