<?php 
namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Pedidos
{
    public $Nome_Cliente;
    public $Telefone;
    public $Endereco;
    public $Quantidade;

    // Método para listar pratos
    public function ListarPratos()
    {
        return DB::select('SELECT nome_produto FROM produtos ORDER BY Cod_produto ASC');
    }

    // Método para gravar pedidos
    public function GravaPedidos($Nome_Cliente, $Telefone, $Endereco, $Quantidade)
    {
        try {
            // Validação básica (pode personalizar conforme necessário)
            if (empty($Nome_Cliente) || empty($Telefone) || empty($Endereco) || $Quantidade <= 0) {
                throw new \Exception("Dados inválidos para gravar o pedido.");
            }

            // Inserindo o pedido no banco de dados
            DB::table('pedidos')->insert([
                'Nome_Cliente' => $Nome_Cliente,
                'Telefone' => $Telefone,
                'Endereco' => $Endereco,
                'Quantidade' => $Quantidade
            ]);

            return "Pedido gravado com sucesso!";
        } catch (\Exception $e) {
            // Tratamento de erro
            return "Erro ao gravar pedido: " . $e->getMessage();
        }
    }
}
?>