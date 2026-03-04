<?php

use Illuminate\Support\Facades\Route;

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
Route::view('/product', 'pages.product');