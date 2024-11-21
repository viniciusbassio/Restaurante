<?php 
namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Fornecedores{

    public $Nome_Fornecedor;
    public $Cnpj;
    public $Endereco;
    public $Telefone;

    public function ListarFornecedores(){
        $ListaFornecedoresDoBanco = DB::select('select * from fornecedores order by Cnpj desc' );
        return $ListaFornecedoresDoBanco;
    }
    public function GravaForn($Nome_Fornecedor,$Cnpj,$Endereco,$Telefone){
       DB::insert('insert into fornecedores(Nome,CNPJ,Endereco,Telefone) values(?,?,?,?)',[$Nome_Fornecedor,$Cnpj,$Endereco,$Telefone]);
    }
}
?>