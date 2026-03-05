@extends('layouts.master')

@section('konten')  
<a href ='/product/tambah' type="button" class="btn btn-primary mb-3">Tambah data</a>
<div class='alert alert-primary'>
  <b>Nama Toko : </b> {{$data_toko['nama_toko']}}
  <br>
  <b>Alamat Toko : </b> {{$data_toko['alamat']}}
  <br>
  <b>Tipe toko : </b> {{$data_toko['type']}}
</div>
<div class="alert alert-primary" role="alert">
  <div class = 'card'>
   <div class = "card-header">
    produk kita gess
   </div> 
  <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Stoct</th>
      <th scope="col">Harga</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($data_product as $item)
      <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$item->nama_product}}</td>
      <td>{{$item->deskripsi_product}}</td>
      <td>{{$item->harga}}</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
      </td>
    </tr>
      @endforeach

  </tbody>
</table>
  </div>
  </div>
  
@endsection