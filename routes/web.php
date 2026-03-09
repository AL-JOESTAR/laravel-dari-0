<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     $data = [
//         'nama' => 'al',
//         'umur' => '20,'
//     ];
//     return view('pages.about', $data);
// });

Route::get('/about',[AboutController::class, 'index']);

Route::get('/about/{id}', function(){
    return view('pages.product.show');
});
Route::view('/beranda','pages.beranda');

//satu controller bisa punya banyak method
Route::get('/product',[ProductController::class, 'index']); //read data
Route::get('/product/create',[ProductController::class, 'create']); //menampilkan halaman form data

Route::post('/product',[ProductController::class, 'store']); //untuk mengelola data yang telah dikirim dari form data
Route::get('/product/{id}', [ProductController::class, 'show']);