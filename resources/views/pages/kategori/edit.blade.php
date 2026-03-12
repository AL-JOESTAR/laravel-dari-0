@extends('layouts.master')

@section('konten')
  <div class="card">
    <div class="card-header">Update data product</div>
    <div class="card-body">
      <form action ="/kategori/{{$data->id_kategori}}" method = "POST">
        @method('PUT')
        @csrf 
          <div class="row">
            <div class="div-col-sm-6">
              <div class="mb-3">
                <label class="form-label">Nama Product</label>
                <input type="text" name="nama" class="form-control" value="{{$data->nama_kategori}}">
                
                 @error('nama')
                  <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                 @enderror
              </div>
            </div>
            <div class="col-12">
              <label>Deskripsi</label>
              <div class="form-floating">
                <textarea class="form-control" name="deskripsik" placeholder="Leave a comment here" style="height: 100px" >{{$data->deskripsi_product}}</textarea> 
              </div>
               @error('deskripsip')
                  <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary mt-3" >update data</button>
            </div>
          </div>
      </form>
    </div>
  </div>
@endsection