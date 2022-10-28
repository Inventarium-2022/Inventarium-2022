<?php

namespace App\Http\Controllers;
Use App\Models\Products;
use Illuminate\Http\Request;
use Redirect;

class AdminProductsController extends Controller
{
    public function index(){
        $products = Products::all();
        return view('admin.products', compact('products'));
    }

    public function edit(Products $products){
        return view('admin.products_edit',[
            'products' => $products
        ]);
    }

    
    public function update(Request $request, Products $products){
        $input =  $request->validate([
            'name' => 'string|required',
            'price' => 'string|required',
            'stock' => 'integer|nullable',
            'cover' => 'file|nullable',
            'description' => 'string|nullable',
        ]);

        if(!empty($input['cover']) && $input['cover']-> isValid()){
            $file = $input['cover'];
            $path = $file->store('products');
            $input['cover'] = $path;
        }

        $products->fill($input);
        $products->save();
        return Redirect::route('admin.products');
        }



public function create(){
    return view('admin.products_create'); 
    
    
}

    public function store(Request $request){

       $input =  $request->validate([
            'name' => 'string|required',
            'price' => 'string|required',
            'stock' => 'integer|nullable',
            'cover' => 'file|nullable',
            'description0' => 'string|nullable',


        ]);
       if(!empty($input['cover']) && $input['cover']-> isValid()){
            $file = $input['cover'];
            $path = $file->store('products');
            $input['cover'] = $path;
       }
        Products::create($input);  
        return Redirect::route('admin.products');
    }

    public function destroy(Products $products){
        $products->delete();
        return Redirect::route('admin.products');
    }


}
