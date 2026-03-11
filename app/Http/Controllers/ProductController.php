<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request){
        $data_toko = [
            'nama_toko' => 'Tokopakedi',
            'alamat' => 'jl.Ambarawa',
            'type' => 'ruko',
        ];
        // return view ('pages.product.show', $data_toko); // atau bisapakai compact (('data_toko')) dankalau maumunculin : {{$data_toko['nama_toko']}}
 

        $search = $request->keyword;

        $data_product = Product::when($search, function($query,$search){
            return $query->where('nama_product','like', "%{$search}%");
        })->get();  //searching dengan nama product
        
        
        //eloquent query mengambil semua data yang berada di tabel product
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
        //validasi form
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

    Public function show($id){
        //untuk elequent or
        $data = Product::findOrFail($id);

        Return view('pages.product.detail',[
            'product' => $data,
        ]);
    }

    public function edit($id){
         //mengirimkan 1 data spesifik dari id yang dikirimkan parameter
        $data = Product::findOrFail($id);

        return view('pages.product.edit', [
            'data'=>$data,
        ]);
    }

    public function update($id,Request $request){
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

        //query simpan data yang telah di update
         Product::where('id_product',$id)->update([
            'nama_product'=>$request->nama,
            'harga'=>$request->hargap,
            'deskripsi_product'=>$request->deskripsip,
        ]);

        return redirect ('/product')->with('pesan', 'berhasil update data');
    }

    public function destroy($id,){
        Product::findOrFail($id)->delete();
        return redirect ('/product')->with('pesan', "data berhasil dihapus");
    }
}
