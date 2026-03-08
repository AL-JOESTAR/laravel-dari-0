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
        ]);
    }

    public function create(){
        return view ('pages.product.add');
    }

    public function store(Request $request){
        //validasi
        $request->validate([
            'nama' => 'required|min:8',
            'hargap' => 'required',
            'deskripsip' =>  'required',
        ],[
            'nama.min'=>'nama harus minimal 8 karakter',
            'nama.required' => 'nama product wajib di isi',
            'hargap.required'=>'harga tidak boleh 0',
            'deskripsip.required' => 'deskripsi tidak boleh kosong',
        ]);

        //query tambah data
        Product::create([
            'nama_product'=>$request->nama,
            'harga'=>$request->hargap,
            'deskripsi_product'=>$request->deskripsip,
            'kategori_id'=>'1',
        ]);

        //setelah daa berhasil ditambah
        return redirect('/product')->with('pesan', 'berhasil menambah data');
    }
}
