<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AdminProductsController;
use App\Models\Products;



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
    return view('welcome');
});

Route::get('/dashboard',"App\Http\Controllers\DashboardController@index", function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard')->name('dashboard');


Route::get('products/{products:id}', 'App\Http\Controllers\ProductsController@show')->name('products');

Route::get('/admin/products', 'App\Http\Controllers\AdminProductsController@index')->name('admin.products');
Route::get('/admin/products/create', 'App\Http\Controllers\AdminProductsController@create')->name('admin.products.create');
Route::post('/admin/products', 'App\Http\Controllers\AdminProductsController@store')->name('admin.products.store');


Route::get('/admin/products/{products}/edit', 'App\Http\Controllers\AdminProductsController@edit')->name('admin.products.edit');
Route::put('/admin/products/{products}', 'App\Http\Controllers\AdminProductsController@update')->name('admin.products.update');
Route::get('/admin/products/{products}/delete', 'App\Http\Controllers\AdminProductsController@destroy')->name('admin.products.destroy');



require __DIR__.'/auth.php';
