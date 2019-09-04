<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App;

class PopularTabela extends Command
{
    
    protected $signature = 'app:popular';

   
    protected $description = 'preenche as tabelas';

  
    public function __construct()
    {
        parent::__construct();
    }

   
    public function handle()
    
    {
        //CATEGORIAS
        $arrayCategoria[] = "Categoria 1";
        $arrayCategoria[] = "Categoria 2";
        $arrayCategoria[] = "Categoria 3";
        $arrayCategoria[] = "Categoria 4";
        
        foreach ($arrayCategoria as $cat){
             $categoria = new App\Categoria();
             $categoria->nomcat = $cat;
             $categoria->save();
        }
        
        //CLIENTE 1
        $arrayCliente[0]['nome'] = "Cliente 1";
        $arrayCliente[0] ['cpf']= "cpf 1";
        $arrayCliente[0] ['endereco']= "Endereço 1";
        $arrayCliente[0] ['numero']= 1;
        $arrayCliente[0] ['bairro']= "Bairro 1";
        $arrayCliente[0]['cidade'] = "Cidade 1";
        $arrayCliente[0]['uf'] = "SC";
        $arrayCliente[0]['telefone'] = "(47)99999-9991";
        
        //CLIENTE 2
        $arrayCliente[1]['nome'] = "Cliente 2";
        $arrayCliente[1] ['cpf']= "cpf 2";
        $arrayCliente[1] ['endereco']= "Endereço 2";
        $arrayCliente[1] ['numero']= 2;
        $arrayCliente[1] ['bairro']= "Bairro 2";
        $arrayCliente[1]['cidade'] = "Cidade 2";
        $arrayCliente[1]['uf'] = "PR";
        $arrayCliente[1]['telefone'] = "(47)99999-9992";
        
        
        //CLIENTE 3
        $arrayCliente[2]['nome'] = "Cliente 3";
        $arrayCliente[2] ['cpf']= "cpf 3";
        $arrayCliente[2] ['endereco']= "Endereço 3";
        $arrayCliente[2] ['numero']= 3;
        $arrayCliente[2] ['bairro']= "Bairro 3";
        $arrayCliente[2]['cidade'] = "Cidade 3";
        $arrayCliente[2]['uf'] = "RS";
        $arrayCliente[2]['telefone'] = "(47)99999-9993";
        
        
         //CLIENTE 4
        $arrayCliente[3]['nome'] = "Cliente 4";
        $arrayCliente[3] ['cpf']= "cpf 4";
        $arrayCliente[3] ['endereco']= "Endereço 4";
        $arrayCliente[3] ['numero']= 4;
        $arrayCliente[3] ['bairro']= "Bairro 4";
        $arrayCliente[3]['cidade'] = "Cidade 4";
        $arrayCliente[3]['uf'] = "SC";
        $arrayCliente[3]['telefone'] = "(47)99999-9994";
        
        
         //CLIENTE 5
        $arrayCliente[4]['nome'] = "Cliente 5";
        $arrayCliente[4] ['cpf']= "cpf 5";
        $arrayCliente[4] ['endereco']= "Endereço 5";
        $arrayCliente[4] ['numero']= 5;
        $arrayCliente[4] ['bairro']= "Bairro 5";
        $arrayCliente[4]['cidade'] = "Cidade 5";
        $arrayCliente[4]['uf'] = "SC";
        $arrayCliente[4]['telefone'] = "(47)99999-9995";
        
        foreach ($arrayCliente as $cli){
             $cliente = new App\Cliente();
             $cliente->nomcli = $cli['nome'];
             $cliente->cpfcli = $cli['cpf'];
             $cliente->endcli = $cli['endereco'];
             $cliente->numcli = $cli['numero'];
             $cliente->baicli = $cli['bairro'];
             $cliente->cidcli = $cli['cidade'];
             $cliente->ufcli = $cli['uf'];
             $cliente->telcli = $cli['telefone'];
             
             $cliente->save();
        }
        
        
        //PRODUTO 1
        $arrayProduto[0]['nome'] = "Produto 1";
        $arrayProduto[0]['descricao'] = "Descrição 1";
        $arrayProduto[0]['valor'] = 110.00;
        $arrayProduto[0]['catalogo'] = 1;
        
         //PRODUTO 2
        $arrayProduto[1]['nome'] = "Produto 2";
        $arrayProduto[1]['descricao'] = "Descrição 2";
        $arrayProduto[1]['valor'] = 220.00;
        $arrayProduto[1]['catalogo'] = 2;
        
         //PRODUTO 3
        $arrayProduto[2]['nome'] = "Produto 3";
        $arrayProduto[2]['descricao'] = "Descrição 3";
        $arrayProduto[2]['valor'] = 330.00;
        $arrayProduto[2]['catalogo'] = 3;
        
         //PRODUTO 4
        $arrayProduto[3]['nome'] = "Produto 4";
        $arrayProduto[3]['descricao'] = "Descrição 4";
        $arrayProduto[3]['valor'] = 440.00;
        $arrayProduto[3]['catalogo'] = 4;
        
         //PRODUTO 5
        $arrayProduto[4]['nome'] = "Produto 5";
        $arrayProduto[4]['descricao'] = "Descrição 5";
        $arrayProduto[4]['valor'] = 550.00;
        $arrayProduto[4]['catalogo'] = 5;
        
        foreach ($arrayProduto as $pro){
             $produto = new App\Produto();
             $produto->nompro = $pro['nome'];
             $produto->despro = $pro['descricao'];
             $produto->vlrpro = $pro['valor'];
             $produto->codcat = $pro['catalogo'];
                         
             $produto->save();
        }
        
       
    }
}
