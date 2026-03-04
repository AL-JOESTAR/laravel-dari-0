@extends('layouts.master')

@section('konten')
<hr>  
<button type="button" class="btn btn-primary mb-3">Tambah data</button>
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
    <tr>
      <th scope="row">1</th>
      <td>minyak</td>
      <td>24</td>
      <td>67000</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
      </td>
    </tr>

          <tr>
      <th scope="row">1</th>
      <td>minyak</td>
      <td>24</td>
      <td>67000</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
      </td>
    </tr>

        <tr>
      <th scope="row">1</th>
      <td>minyak</td>
      <td>24</td>
      <td>67000</td>
      <td>
        <button type="button" class="btn btn-danger">Hapus</button>
        <button type="button" class="btn btn-warning">Edit</button>
      </td>
    </tr>
  </tbody>
</table>
  </div>
  </div>

  
@endsection