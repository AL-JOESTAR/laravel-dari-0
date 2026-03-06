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
                <input type="text" name="nama_product" class="form-control" value="{{old ('nama_product')}}">
                
                 @error('nama_product')
                  <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                 @enderror
              </div>
            </div>
            <div class="col-sm-6">
              <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" value="{{old ('nama_product')}}>
                 @error('harga')
                  <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                 @enderror
              </div>
            <div class="col-12">
              <label>Deskripsi</label>
              <div class="form-floating">
                <textarea class="form-control" name="deskripsi_product" placeholder="Leave a comment here" style="height: 100px" ></textarea>
                
              </div>
               @error('deskripsi_product')
                  <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary mt-3" value="{{old ('nama_product')}}">Tambah data</button>
            </div>
          </div>
      </form>
    </div>
  </div>
@endsection