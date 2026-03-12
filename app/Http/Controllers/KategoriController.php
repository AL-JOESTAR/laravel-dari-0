<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //query untuk ambil semua data itu ->get()

        $kategori = Kategori::get();
        
        return view ('pages.kategori.show', compact(('kategori')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('pages.kategori.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:8',
            'deskripsik' => 'required',
        ],[
            'nama.min' => 'nama minimal 8 karakter',
            'nama.required' => 'nama wajib di isi',
            'deskripsi.required' => 'deskripsi tidak boleh kosong',
        ]);

        Kategori::create([
            'nama_kategori' =>$request->nama,
            'deskripsi' =>$request->deskripsik,
        ]);

        return redirect('/kategori')->with('pesan', 'berhasil menambah data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Kategori::findOrFail($id);
        
        return view ('pages.kategori.edit',[
            'data' => $data,
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:8',
            'deskripsik' => 'required',
        ],[
            'nama.min' => 'nama minimal 8 karakter',
            'nama.required' => 'nama wajib di isi',
            'deskripsi.required' => 'deskripsi tidak boleh kosong',
        ]);

        Kategori::where('id_kategori', $id)->update([
            'nama_kategori' =>$request->nama,
            'deskripsi' =>$request->deskripsik,
        ]);

        return redirect('/kategori')->with('pesan', 'berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kategori::findOrFail($id)->delete();
        return redirect ('/kategori')->with('pesan', "data berhasil dihapus");
    }
}
