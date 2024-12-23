<?php

namespace app\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Produtos
{
    public $nomeProduto;
    public $Cod_Produto;
    public $Desc_produto;


    public function listarProdutos()
    { /*Importar em view de produtos para pegar os dados do banco na montagem do cardapio*/
        $listaProdutosDoBanco = DB::select('select * from produtos order by cod_produto ASC');
        return $listaProdutosDoBanco;
    }
    public function gravar($nomeProduto, $Desc_produto)
    {
        DB::insert('insert into produtos (nome_produto,descricao_produto) values (?,?)', [$nomeProduto, $Desc_produto]);
    }
}
?>