<?php

use App\Models\Fornecedores;
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
    return view('Menu');
});

Route::get('/Cardapio', function () {
    $produtos = new Produtos();
    $produtos = $produtos->listarProdutos();
    return view('Cardapio',["listaProdutos"=>$produtos]);
});

Route::get('/produtos/cadastrar', function (Request $request) {
    $produtos = new Produtos();   
    $produtos->nomeProduto = $request->nome_produto;
    $produtos->gravar($request->nome_produto,$request->descricao_produto,);
    $produtos = $produtos->listarProdutos();
    return view('Cardapio',["listaProdutos"=>$produtos]);
    });
    
Route::get('/fornecedores/cadastrar', function (Request $request) {
    $fornecedores = new Fornecedores();
    $fornecedores->Nome_Fornecedor = $request->Nome_Fornecedor;
    $fornecedores = $fornecedores->ListarFornecedores();
    return view('cadastro_de_fornecedores',["listafornecedores"=>$fornecedores]);
});


Route::get('/Cadatrar_Produtos', function () {
    return view('Cadatrar_Produtos');
});

Route::get('/Cadastrar_fornecedores',function(){
    return view('cadastro_de_fornecedores');
} )

?>