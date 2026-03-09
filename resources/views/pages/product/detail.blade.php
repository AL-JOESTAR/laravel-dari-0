@extends('layouts.master')

@section('konten')  
<div class="alert alert-primary" role="alert">
  <div class = 'card'>
   <div class = "card-header">
    detail produk kita gess
   </div> 
     
   <div class="card-body">
    <img src="https://placehold.co/600x400" class="img-fluid" alt="...">
    <p>Nama Product : {{$product->nama_product}}</p>
    <p>Harga : {{$product->harga}}</p>
    <p>Deskripsi : {{$product->deskripsi_product}}</p>
    <p>Kategori : apa aja gess</p>
    <p>Stok : kalau ada aja</p>
  </div>
  </div>
  </div>
  
@endsection