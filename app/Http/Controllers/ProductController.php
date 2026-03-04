<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data_toko = [
            'nama_toko' => 'Tokopakedi',
            'alamat' => 'jl.Ambarawa',
            'type' => 'ruko',
        ];
       return view ('pages.product', $data_toko); // atau bisapakai compact (('data_toko')) dankalau maumunculin : {{$data_toko['nama_toko']}}
    }

    public function tambah(){
        return view ('pages.addProduct');
    }
}
