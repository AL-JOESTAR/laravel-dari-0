@extends('layouts.master')

@section('konten')
  <h1>Daftar Kategori Product</h1>
  <hr>
    <a href="/kategori/create" class="btn btn-primary mb-3">Tambah kategori</a>
  <div class="card">
    <div class="card-header">
        Tabel kategori
    </div>

    @if(session('pesan'))
    <div class="alert alert-primary">
        {{session('pesan')}}
    </div>
    @endif
    
    <div class="card-body">
        <table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Nama kategori</th>
      <th scope="col">deskripsi</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($kategori as $item)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$item->nama_kategori}}</td>
        <td>{{$item->deskripsi}}</td>
        <td>
        
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus{{$item->id_kategori}}">
            Hapus
        </button>
            
            <a href = "/kategori/{{$item->id_kategori}}/edit" class="btn btn-warning">edit</button>
            
        </td>
    </tr>
    @empty
        <tr>
            <td colspan ="4" class="text-center">Data yang anda cari tidak ada</td>
        </tr>
    @endforelse
  </tbody>
</table>
    </div>
  </div>

  @foreach($kategori as $item)
<div class="modal fade" id="hapus{{$item->id_kategori}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="/kategori/{{$item->id_kategori}}" method="POST" class="modal-content">
      @csrf
      @method('DELETE')
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Yakin hapus data?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{$item->nama_kategori}}
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