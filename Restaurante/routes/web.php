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
    $produtos->gravar($request->nome_produto,$request->descricao_produto);
    $produtos = $produtos->listarProdutos();
    return view('Cardapio',["listaProdutos"=>$produtos]);
    });
// Criar rota para mostrar view sem capturar parametro
Route::get('/fornecedores',function(){
    $fornecedores = new Fornecedores();
    
    return view('cadastro_de_fornecedores');
});
// Depois Criar rota para montagem do objeto e obtenção de informações
// Nome_Fornecedor é o nome do campo no html que sera passado para as variaveis 
Route::get('/fornecedores/cadastrar', function (Request $request) {
    $fornecedores = new Fornecedores();
    $fornecedores->Nome_Fornecedor = $request->Nome_Fornecedor;
    $fornecedores->GravaForn($request->Nome_Fornecedor,$request->Cnpj,$request->Endereco,$request->Telefone);
    $fornecedores = $fornecedores->ListarFornecedores();
    return view('cadastro_de_fornecedores');
});

Route::get('/Cadatrar_Produtos', function () {
    return view('Cadatrar_Produtos');
});
Route::get('/Cadastrar/Pedidos',function(){
    return view('Pedidos');
});

Route::get('/Relatorios',function(){
    return view('relatorios');
})
?>