@extends('layouts.master')

@section('konten')
  <div class="card">
    <div class="card-header">Tambah Kategori</div>
    <div class="card-body">
      <form action ="/kategori" method = "POST">
        @csrf 
          <div class="row">
            <div class="div-col-sm-6">
              <div class="mb-3">
                <label class="form-label">Nama Kategori</label>
                <input type="text" name="nama" class="form-control" value="{{old ('nama')}}">
                
                 @error('nama')
                  <div id="emailHelp" class="form-text text-danger">{{$message}}</div>
                 @enderror
              </div>
            </div>
            <div class="col-12">
              <label>Deskripsi</label>
              <div class="form-floating">
                <textarea class="form-control" name="deskripsik" placeholder="Leave a comment here" style="height: 100px" ></textarea>
                
              </div>
               @error('deskripsik')
                  <div id="emailHelp" class="form-text text-danger" value="{{old ('deskripsik')}}">{{$message}}</div>
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