<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Vendas;
use Illuminate\Http\Request;

class RelatoriosController extends Controller
{
    public function relatorio(){

        $vendas = Vendas::limit(5)->orderBy('qtdVendas')->get()->sortByDesc("qtdVendas");
        $relatorio = array();
        if(isset($vendas[0])) {
            foreach ($vendas as $key => $value) {
                $product = Products::findOrFail($value->productId);

                $relatorio[] = [$value->qtdVendas, $product->name];
            }
        }else{
            unset($relatorio);
        }

        return view('relatorios', [
            'products' => $relatorio,
        ]);
    }
}
