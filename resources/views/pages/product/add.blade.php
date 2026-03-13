@extends('layouts.master')

@section('konten')
  <div class="card">
    <div class="card-header">Tambah data product</div>
    <div class="card-body">
      <form action ="/product" method = "POST">
        @csrf 
          <div class="row">
            <div class="div-col-sm-6">
              <div class="mb-3">
                <label class="form-label">Nama Product</label>
                <input type="text" name="nama" class="form-control" value="{{old ('nama')}}">
                
                 @error('nama')
                  <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                 @enderror
              </div>
            </div>
            <div class="col-sm-6">
              <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="hargap" class="form-control" value="{{old ('hargap')}}">
                 @error('hargap')
                  <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                 @enderror
              </div>

              <div class="col-sm-6">
              <div class="mb-3">
                <label class="form-label">Kategori</label>
                <select class="form-select" aria-label="Default select example" name="kategori">
                    <option value="">pilih kategori</option>
                    @foreach ($data as $item)
                    <option value="{{$item->id_kategori}}">{{$item -> nama_kategori}}</option>
                    @endforeach
                </select>
                 @error('Kategori')
                  <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                 @enderror
              </div>

              <div class="col-sm-6">
              <div class="mb-3">
                <label class="form-label">stock</label>
                <input type="number" name="stock" class="form-control" value="{{old ('stock')}}">
                 @error('stock')
                  <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                 @enderror
              </div>

            <div class="col-12">
              <label>Deskripsi</label>
              <div class="form-floating">
                <textarea class="form-control" name="deskripsip" placeholder="Leave a comment here" style="height: 100px" ></textarea>
                
              </div>
               @error('deskripsip')
                  <div id="emailHelp" class="form-text text-danger" value="{{old ('deskripsip')}}">{{$message}}</div>
                @enderror
            </div>
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary mt-3" >Tambah data</button>
            </div>
          </div>
      </form>
    </div>
  </div>
@endsection