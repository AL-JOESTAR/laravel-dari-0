<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/about', function () {
//     $data = [
//         'nama' => 'al',
//         'umur' => '20,'
//     ];
//     return view('pages.about', $data);
// });

// Route::get('/dashboard', function () {
//     return view('welcome');
// });

Route::get('/about',[AboutController::class, 'index']);

Route::get('/about/{id}', function(){
    return view('pages.product.show');
});
Route::view('/beranda','pages.beranda');

//satu controller bisa punya banyak method
Route::get('/product',[ProductController::class, 'index']); //read data

//create
Route::get('/product/create',[ProductController::class, 'create']); //menampilkan halaman form data
Route::post('/product',[ProductController::class, 'store']); //untuk mengelola data yang telah dikirim dari form data

//read
Route::get('/product/{id}', [ProductController::class, 'show']);

//update
Route::get('/product/{id}/edit', [ProductController::class, 'edit']);
Route::put('/product/{id}', [ProductController::class, 'update']);

//Delete
Route::delete('product/{id}', [ProductController::class, 'destroy']);

//routing menggunakan resource CRUD jadi lebih gampang bree
Route::resource('/kategori', KategoriController::class);

Route::get('/login', fn() => view('auth.login'))->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth', 'check_role:admin,staff']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
});

Route::group(['middleware' => ['auth', 'check_role:admin']], function(){
    Route::get('/info', fn()=> "halaman admin" );
});

Route::group(['middleware' => ['auth', 'check_role:customer']], function(){
    Route::get('/customer', fn()=> "halaman customer");
});