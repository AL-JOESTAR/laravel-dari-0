@extends('layouts.master')

@section('konten')  
<a href ='/product/create' type="button" class="btn btn-primary mb-3">Tambah data</a>
<div class='alert alert-primary'>
  <b>Nama Toko : </b> {{$data_toko['nama_toko']}}
  <br>
  <b>Alamat Toko : </b> {{$data_toko['alamat']}}
  <br>
  <b>Tipe toko : </b> {{$data_toko['type']}}
</div>
@if(session('pesan'))
  <div class="alert alert-primary">
    {{session('pesan')}}
  </div>
@endif
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
      <th scope="col">Deskripsi</th>
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
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus{{$item->id_product}}">
            Hapus
        </button>
        <a href="/product/{{$item->id_product}}/edit" class="btn btn-warning">Edit</button>
        <a href="/product/{{$item->id_product}}" class="btn btn-primary">Detail</button>
      </td>
    </tr>
      @endforeach

  </tbody>
</table>
  </div>
  </div>

  <!-- Modal -->
@foreach($data_product as $item)
<div class="modal fade" id="hapus{{$item->id_product}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="/product/{{$item->id_product}}" method="POST" class="modal-content">
      @csrf
      @method('DELETE')
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Yakin hapus data?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{$item->nama_product}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Hapus data</button>
      </div>
  </form>
  </div>
</div>
@endforeach
@endsection