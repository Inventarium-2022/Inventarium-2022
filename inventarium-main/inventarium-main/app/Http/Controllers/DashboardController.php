<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index(){
        $filter = request('filter');

        if ($filter) {
            $products = Products::where([
                ['categorie', '=', $filter]
            ])->get(); 
        }else{
            $products = Products::all();
        }
        
        $categories = Products::all();
        return view('dashboard', [
            'products' => $products,
            'categories' => $categories
        ]);
    }
}

