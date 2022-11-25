<?php

namespace App\Http\Controllers;
use App\Models\Vendas;
use App\Models\Products;
use Illuminate\Http\Request;
use Redirect;

class VendasController extends Controller
{

    public function venda(Request $request){

        $input =  $request->validate([
             'productId' => 'string|required',
             'qtd' => 'integer|required',
        ]);
        
        $exist = Vendas::where([
            ['productId', '=', $input['productId']]
        ])->get();
            
        if(isset($exist[0])) {
            $input['qtd'] += isset($exist[0]->qtdVendas);

            Vendas::where([
                ['productId', '=', $input['productId']]
            ])->update([
                'qtdVendas' => $input['qtd']
            ]);

            $product = Products::findOrFail($input['productId']);

            $product2 = Products::findOrFail($input['productId'])->update([
                'stock' => ($product->stock - $input['qtd'])
            ]);
        }else{
            Vendas::create([
                'productId' => $input['productId'],
                'qtdVendas' => $input['qtd']
            ]); 

            $product = Products::findOrFail($input['productId']);

            $product2 = Products::findOrFail($input['productId'])->update([
                'stock' => ($product->stock - $input['qtd'])
            ]);
        }
          
        return Redirect::route('admin.products');
     }
}
