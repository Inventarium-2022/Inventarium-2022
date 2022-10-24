<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show(Products $products){
        return view('products',[
            'products' => $products
        ]);
    }
}
