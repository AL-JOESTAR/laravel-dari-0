<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $data = [
        'nama' => 'al',
        'umur' => '20,'
    ];
    return view('pages.about', $data);
});

Route::get('/about/{id}', function(){
    return view('pages.product');
});
Route::view('/beranda','pages.beranda');

//satu controller bisa punya banyak method
Route::get('/product',[ProductController::class, 'index']);
Route::get('/product/tambah',[ProductController::class, 'tambah']);