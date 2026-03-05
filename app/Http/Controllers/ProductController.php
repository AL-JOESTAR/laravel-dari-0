<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $data_toko = [
            'nama_toko' => 'Tokopakedi',
            'alamat' => 'jl.Ambarawa',
            'type' => 'ruko',
        ];
        // return view ('pages.product.show', $data_toko); // atau bisapakai compact (('data_toko')) dankalau maumunculin : {{$data_toko['nama_toko']}}
        
        $data_product = Product::get(); //eloquent query mengambil semua data yang berada di tabel product
        // $queryBuilder = DB::table('tb_products')->get(); //query mengambil semua data dalam tabel produk
        return view ('pages.product.show', [
            'data_toko' => $data_toko,
            'data_product' => $data_product,
        ]); // atau bisapakai compact (('data_toko')) dankalau maumunculin : {{$data_toko['nama_toko']}}
    }

    public function tambah(){
        return view ('pages.addProduct');
    }
}
